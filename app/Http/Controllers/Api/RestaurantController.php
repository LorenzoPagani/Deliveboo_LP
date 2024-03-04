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
}
