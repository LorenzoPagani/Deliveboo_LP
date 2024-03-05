<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Database\Eloquent\Builder;

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

    public function index_by_type(Request $richiesta)
    {
        $types = $richiesta->input("types", []);
        #$restaurants = Restaurant::whereRelation("types", "id", "=", $type_id)->get();
        $query = Restaurant::with("types");
        foreach ($types as $type) {
            $query->whereHas("types", function (Builder $q) use ($type) {
                $q->where("id", "=", $type);
            });
        }
        $restaurants = $query->get();
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
