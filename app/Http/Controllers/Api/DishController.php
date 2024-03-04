<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve the restaurant ID from the request parameters
        $restaurantId = $request->input('restaurant_id');

        // Query dishes with the specified restaurant ID
        $dishes = Dish::where('restaurant_id', $restaurantId)->get();

        return response()->json([
            'success' => true,
            'data' => $dishes
        ]);
    }
}
