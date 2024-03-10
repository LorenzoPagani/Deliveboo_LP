<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string|max:255',
            'restaurant_id' => 'required',
            'total' => 'required|numeric',
            'dishes' => 'required|min:1',
            'dishes.*.id' => 'required',
            'dishes.*.quantity' => 'required|min:1'
        ]);
        $newOrder =  new Order();
        $newOrder->date = Carbon::now();
        $newOrder->restaurant_id = $validated["restaurant_id"];
        $newOrder->name = $validated["name"];
        $newOrder->email = $validated["email"];
        $newOrder->address = $validated["address"];
        $newOrder->total = $validated["total"];
        $newOrder->save();
        foreach ($validated["dishes"] as $piatto) {
            $newOrder->dishes()->attach($piatto["id"], ["quantity" => $piatto["quantity"]]);
        }
        $res = [
            "success" => true,
            "order_id" => $newOrder->id
        ];
        return response($res);
    }
}
