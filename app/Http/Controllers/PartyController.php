<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parties;

class PartyController extends Controller

{
    /**
     * Display a listing of the resource.
     */

    public function index()

    {
        $parties = Parties::orderBy('created_at', 'desc')->get();
        return view('parties.parties_list', compact('parties'));
    }
    
    /**
     * Show the form for creating a new resource.
     */

    public function create()

    {
        return view('parties.add_parties');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)

    {

        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:parties,email',
            'phone' => 'required',
            'street'=> 'required',
            'suburb'=> 'required',
            'state'=> 'required',
            'pincode'=> 'required',


        ], [
            'phone.regex' => 'The phone number must be in international format, e.g., +1234567890.',
            'email.unique' => 'The email address has already been taken.',
        ]);

        Parties::create($request->only(['name', 'email', 'phone', 'street', 'house_number', 'suburb', 'state', 'pincode','party_type']));
        return redirect()->route('parties.index')->with('success', 'Customer created successfully.');

    }

    /**
     * Display the specified resource.
     */

    public function show(Parties $party)
{
    // Ensure lists are sorted by 'created_at' in descending order
    $lists = $party->lists()->orderBy('created_at', 'desc')->get();

    return view('parties.show_parties', compact('party', 'lists'));
}

     

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Parties $party)

    {
        return view('parties.edit_parties', compact('party'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, Parties $party)

     {
         $request->validate([
             'name' => 'required',
             'email' => 'required|email|unique:parties,email,' . $party->id,
             'phone' => 'required',
             'street'=> 'required',
             'suburb'=> 'required',
             'state'=> 'required',
             'pincode'=> 'required',
         ], [
             'phone.regex' => 'The phone number must be in international format, e.g., +1234567890.',
             'email.unique' => 'The email address has already been taken.',
         ]);
     
         $party->update($request->only(['name', 'email', 'phone', 'street', 'house_number', 'suburb', 'state', 'pincode', 'party_type']));
     
         return redirect()->route('parties.edit', ['party' => $party->id])->with('success', 'Party updated successfully.');
     }
     

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Parties $party)

    {

        $party->delete();

        return redirect()->route('parties.index')->with('success', 'Parties deleted successfully.');

    }

    public function updateStatus(Request $request, $id)

    {
        $party = Parties::findOrFail($id);

        $party->status = $request->input('status');

        $party->save();

        // Store email in session

        $request->session()->put('status_email', $party->email);

        // Fetch all parties again for display (or you can fetch just one party and pass it to the view)

        $parties = Parties::all();

        // Return view with updated status message
        return response()->json(['success' => 'Status updated successfully']);
        // return redirect()->route('parties.index')->with('success', 'party status updated successfully.');

    }


    public function showlistcoustomer($id)

{
    // Fetch the party details based on $id
    $party = Parties::findOrFail($id); 

    return view('list.show_list', compact('party'));
}

public function checkEmail(Request $request)
{
    $email = $request->input('email');
    $exists = Parties::where('email', $email)->exists();

    return response()->json(['available' => !$exists]);
}




}
