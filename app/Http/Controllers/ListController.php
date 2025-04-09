<?php

namespace App\Http\Controllers;

// make sure to import listmodel
use App\Models\ListModel;
use App\Models\Order;
use App\Models\Parties; // Import the Parties model
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;

// Make sure to import Product model    
use App\Models\Project;
use Illuminate\Http\Request;

class ListController extends Controller


//  crate a new  list  file redirect controller  start  //

{
    public function createproject($party_id)

    {
        return view('list.add_list', compact('party_id'));
    }


    // insert new list controller start //

    public function store(Request $request)

    {
        $request->validate([

            'list_name' => 'required|max:255',
            'suburb' => 'required|max:255',
            'state' => 'required|max:255',
            'pincode' => 'required|max:255',
            'list_description' => 'required',
            'contact_number' => 'max:20',
            'contact_email' => 'required|email|max:255',
            'builder_name' => 'required|max:255',
            'status' => 'required|max:255',
            'parties_id' => 'required|exists:parties,id',

        ]);


        ListModel::create([

            'name' => $request->input('list_name'),
            'suburb' => $request->input('suburb'),
            'state' => $request->input('state'),
            'pincode' => $request->input('pincode'),
            'description' => $request->input('list_description'),
            'contact_number' => $request->input('contact_number'),
            'contact_email' => $request->input('contact_email'),
            'builder_name' => $request->input('builder_name'),
            'status' => $request->input('status'),
            'parties_id' => $request->input('parties_id'),

        ]);


        return redirect()->route('parties.show', $request->input('parties_id'))
            ->with('success', 'List created successfully.');
    }


    //  singal list show contriller start //

    public function show($id)

    {
        $list = ListModel::findOrFail($id);

        return view('list.show_list', compact('list'));
    }


    // list edit file redirect  controller start  //


    public function edit($id)

    {
        $list = ListModel::findOrFail($id);
        return view('list.edit_list', compact('list'));
    }



    // list update controller strat //

    public function update(Request $request, $id)

    {
        $request->validate([

            'name' => 'required|max:255',
            'suburb' => 'required|max:255',
            'state' => 'required|max:255',
            'pincode' => 'required|max:255',
            'description' => 'required',
            'contact_number' => 'max:20',
            'contact_email' => 'required|email|max:255',
            'builder_name' => 'required|max:255',
            'status' => 'required|max:255',

        ]);

        $list = ListModel::findOrFail($id);

        $list->update($request->all());

        return redirect()->route('parties.show', $list->parties_id)
            ->with('success', 'List updated successfully.');
    }



    public function destroy($id)
    {
        $list = ListModel::findOrFail($id);

        // Instead of deleting, just update delete_status to 0
        $list->delete_status = 1;
        $list->save();

        return redirect()->back()->with('success', 'List deleted successfully.');
    }


    // add cart product controller start  //

    public function addcartproject($list, $partyId)
    {
        $list = ListModel::findOrFail($list);
        return view('list.add_cart_project', compact('list', 'partyId'));
    }



    // addtocart project  create a session listid wise code //

    public function addToCart(Request $request, $listId)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $comment = $request->input('comment');

        $partyId = session()->get('party_id');

        $cart = session()->get('cart', []);

        if (!isset($cart[$listId])) {
            $cart[$listId] = [];
        }

        if (!isset($cart[$listId][$partyId])) {
            $cart[$listId][$partyId] = [];
        }

        $cart[$listId][$partyId][$productId] = [
            'product_id' => $productId,
            'quantity' => $quantity,
            'comment' => $comment,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }


    // add to cart product is a view listid wise //

    public function viewCart($listId)

    {

        $list = ListModel::findOrFail($listId);


        $partyId = $list->party_id;

        $party = Parties::findOrFail($partyId);

        $partyId = session()->get('party_id');

        $cart = session()->get('cart', []);

        $cartItems = [];

        if (isset($cart[$listId][$partyId])) {

            $productIds = array_keys($cart[$listId][$partyId]);

            $products = Product::whereIn('id', $productIds)->get();

            foreach ($products as $product) {

                if (isset($cart[$listId][$partyId][$product->id])) {

                    $cartItems[] = [

                        'product' => $product,

                        'quantity' => $cart[$listId][$partyId][$product->id]['quantity'],

                        'comment' => $cart[$listId][$partyId][$product->id]['comment'],

                    ];
                }
            }
        }

        return view('list.view_cart', compact('list', 'party', 'cartItems'));
    }

    public function updateqty(Request $request, $listId, $productId)
    {
        $partyId = session()->get('party_id');
        $cart = session()->get('cart', []);

        // Get quantity and comment from the request
        $quantity = $request->input('quantity');
        $comment = $request->input('comment');

        if (isset($cart[$listId][$partyId][$productId])) {
            $cart[$listId][$partyId][$productId]['quantity'] = $quantity;
            $cart[$listId][$partyId][$productId]['comment'] = $comment;

            session()->put('cart', $cart);

            return redirect()->route('cart.view', $listId)->with('success', 'Quantity and comment updated successfully.');
        }

        return redirect()->route('cart.view', $listId)->with('error', 'Product not found in cart.');
    }


    //  remove product in add to cart product //

    public function removeFromCart($listId, $productId, $partyId)

    {

        $sessionpartyId = session()->get('party_id');


        $cart = session()->get('cart', []);

        if (isset($cart[$listId][$sessionpartyId]) && array_key_exists($productId, $cart[$listId][$sessionpartyId])) {

            unset($cart[$listId][$sessionpartyId][$productId]);

            session()->put('cart', $cart);

            return redirect()->route('lists.view-cart', ['list' => $listId, 'party_id' => $partyId])
                ->with('success', 'Product removed from cart successfully.');
        }

        return redirect()->route('lists.view-cart', ['list' => $listId, 'party_id' => $partyId])
            ->with('error', 'Product not found in cart.');
    }

    public function saveOrder(Request $request)

    {
        if ($request->isMethod('post')) {
            $listId = $request->input('list_id');
            $partyId = $request->input('party_id');
            $cartItems = $request->input('cart_items');
            $listEmail = $request->input('list_email');
            $partyEmail = $request->input('party_email');
            $actionType = $request->input('action_type');

            try {
                $list = ListModel::find($listId);

                if (!$list) {
                    throw new \Exception("List not found.");
                }

                $ordersData = [];
                $orderId = null;

                foreach ($cartItems as $item) {
                    $productCode = $item['product_code'];
                    $productName = $item['product_name'];
                    $quantity = $item['quantity'];
                    $productImage = $item['product_image'];
                    $productId = $item['product_id'];
                    $comment = $item['comment'];


                    $existingOrder = Order::where('product_id', $productId)
                        ->where('list_id', $listId)
                        ->where('party_id', $partyId)
                        ->first();

                    if ($existingOrder) {
                        $existingOrder->quantity = $quantity;
                        $existingOrder->comment = $comment;

                        $existingOrder->save();

                        $ordersData[] = [
                            'product_name' => $productName,
                            'product_code' => $productCode,
                            'quantity' => $existingOrder->quantity,
                            'comment' => $comment,
                            'product_image' => $productImage,
                            'order_id' => $existingOrder->id,
                        ];
                    } else {
                        $order = Order::create([
                            'quantity' => $quantity,
                            'party_id' => $partyId,
                            'list_id' => $listId,
                            'product_id' => $productId,
                            'comment' => $comment,

                        ]);

                        $ordersData[] = [
                            'product_name' => $productName,
                            'product_code' => $productCode,
                            'quantity' => $quantity,
                            'comment' => $comment,
                            'product_image' => $productImage,
                            'order_id' => $order->id,
                        ];

                        if (!$orderId) {
                            $orderId = $order->id;
                        }
                    }
                }


                $request->session()->forget('cart.' . $listId);

                $party = Parties::find($partyId);
                $partyName = $party ? $party->name : 'party';

                $orderDate = now()->format('Y-m-d H:i:s');

                $orderData = [
                    'partyName' => $partyName,
                    'orderId' => $orderId,
                    'orderDate' => $orderDate,
                    'ordersData' => $ordersData,
                    'partyEmail' => $partyEmail,
                    'party' => $party,
                    'list' => $list,
                ];

                if ($actionType == 'save_send') {
                    $pdf = Pdf::loadView('emails.order_confirmation', compact('orderData'));

                    Mail::send([], [], function ($message) use ($party, $list, $pdf) {
                        $message->to($party->email)
                            ->subject('Product List Received from Oreva Selection')
                            ->attachData($pdf->output(), "Selection Oreva_{$list->id}.pdf");
                    });

                    Mail::send([], [], function ($message) use ($list, $pdf) {
                        $message->to($list->contact_email)
                            ->subject('Product List Received from Oreva Selection')
                            ->attachData($pdf->output(), "Selection Oreva_{$list->id}.pdf");
                    });

                    return redirect()->route('showlistparty', [
                        'listId' => $listId,
                        'partyId' => $partyId
                    ])->with('success', 'Order saved successfully and email sent successfully.');
                }

                return redirect()->route('showlistparty', [
                    'listId' => $listId,
                    'partyId' => $partyId
                ])->with('success', 'Order saved successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Failed to save order. ' . $e->getMessage());
            }
        } else {
            return redirect()->back();
        }
    }


    public function removeShowListFromCart($listId, $productId, $partyId)

    {

        $sessionpartyId = session()->get('party_id');

        $cart = session()->get('cart', []);

        if (isset($cart[$listId][$sessionpartyId]) && array_key_exists($productId, $cart[$listId][$sessionpartyId])) {

            unset($cart[$listId][$sessionpartyId][$productId]);

            session()->put('cart', $cart);


            return redirect()->route('lists.showlistcoustomer', ['list' => $listId, 'party_id' => $partyId])
                ->with('success', 'Product removed from cart successfully.');
        }

        return redirect()->route('lists.showlistcoustomer', ['list' => $listId, 'party_id' => $partyId])
            ->with('error', 'Product not found in cart.');
    }

    public function showListparty($listId, $partyId)
    {
        $list = ListModel::with('submissions')->find($listId);
        $party = Parties::find($partyId);

        return view('list.show_list', compact('list', 'party'));
    }

    //  show list order update qty //

    public function updateQuantity(Request $request, $orderId)

    {
        $order = Order::find($orderId);

        if ($order) {

            $order->quantity = $request->input('quantity');

            $order->save();

            return response()->json(['success' => true, 'message' => 'Quantity updated successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Order not found'], 404);
    }


    //  show list delete order  //

    public function destroyOrders(Order $order)

    {
        $order->delete();

        return redirect()->back()->with('success', 'Order deleted successfully.');
    }

    public function getLists(Request $request)

    {
        $partyId = $request->input('party_id');
        $lists = ListModel::where('parties_id', $partyId)->get(['id', 'name']);

        return response()->json($lists);
    }


    public function showList($list, $party_id)

    {

        return view('lists.show_list', compact('list', 'party_id'));
    }

    public function sendEmail($list_id, $party_id)

    {
        $list = ListModel::find($list_id);
        $party = Parties::find($party_id);

        if (!$list || !$party) {
            return redirect()->back()->with('error', 'List or party not found');
        }

        $ordersData = Order::select('orders.*', 'products.product_name', 'products.product_image')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.list_id', $list_id)
            ->where('orders.parties_id', $party_id)
            ->get();


        $orderData = [
            'list' => $list,
            'party' => $party,
            'ordersData' => $ordersData
        ];

        $pdf = Pdf::loadView('emails.order_confirmation', ['orderData' => $orderData]);

        Mail::send([], [], function ($message) use ($party, $list, $pdf) {
            $message->to($party->email)
                ->subject('Product List Received from Oreva Selection')
                ->attachData($pdf->output(), "Selection Oreva_{$list->id}.pdf");
        });

        Mail::send([], [], function ($message) use ($list, $pdf) {
            $message->to($list->contact_email)
                ->subject('Product List Received from Oreva Selection')
                ->attachData($pdf->output(), "Selection Oreva_{$list->id}.pdf");
        });

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}
