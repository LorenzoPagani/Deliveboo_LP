<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\Type;

class RestaurantController extends Controller
{
    public function index()
    {
        $results = [
            "restaurants" => Restaurant::with('types')->get(),
            "types" => Type::all()
        ];

        return response()->json([
            'success' => true,
            'data' => $results
        ]);
    }

    public function index_by_type(string $type_id)
    {
        $restaurants = Restaurant::whereRelation("types", "id", "=", $type_id)->get();
        return response()->json([
            'success' => true,
            'restaurants' => $restaurants
        ]);
    }

    public function show(string $id)
    {
        $restaurant = Restaurant::with("dishes")->find($id);
        return response()->json([
            'success' => true,
            'restaurant' => $restaurant
        ]);
    }
}
