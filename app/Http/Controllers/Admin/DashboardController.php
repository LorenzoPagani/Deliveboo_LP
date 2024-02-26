<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $restaurant_id = Auth::user()->restaurant->id;
        $orders = Order::where("restaurant_id", "=", $restaurant_id)->orderBy('id', 'desc')->take(5)->get();



        return view('admin.dashboard', compact("orders"));
    }
}
