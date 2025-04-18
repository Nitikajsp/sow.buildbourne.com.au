<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parties;
// use App\Models\Product;
use App\Models\Order;
use App\Models\Setting;
use App\Models\ListModel;

class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()

    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $partyCount = Parties::count();
        $parties = Parties::where('delete_status', 0)
            ->orderBy('created_at', 'desc')
            ->get();
        $listCount = ListModel::count();
        $recentOrders = Order::with('product', 'party')->latest()->take(4)->get();

        // Monthly data for chart
        $monthlyData = Order::selectRaw('MONTH(created_at) as month, COUNT(DISTINCT list_id) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        // Fill missing months with 0
        $monthlyData = array_replace(array_fill(1, 12, 0), $monthlyData);

        // Calculate total orders and determine percentage scale (where 10 orders = 1%)
        $totalOrders = array_sum($monthlyData);
        $percentageScale = 1;

        // Convert monthly data to percentages
        $monthlyDataPercentages = array_map(function ($count) use ($percentageScale) {
            return $count / $percentageScale;
        }, $monthlyData);

        return view('home', compact('partyCount', 'listCount', 'parties', 'recentOrders', 'monthlyDataPercentages'));
    }
}
