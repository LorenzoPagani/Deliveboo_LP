<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $restaurants = Restaurant::where('user_id', $userId)->get();
        return view('admin.restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.restaurants.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestaurantRequest $request)
    {
        $new_Restaurant = new Restaurant;
        $new_Restaurant->user_id = Auth::id();
        $new_Restaurant->fill($request->all());

        $new_Restaurant->save();
        if ($request->types) {
            $new_Restaurant->types()->attach($request->types);
        }

        return redirect()->route('admin.restaurants.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        if (Auth::user()->cannot('view', $restaurant)) {
            abort(403, "You are not authorized to access this restaurant");
        }
        return view('admin.restaurants.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        if (Auth::user()->cannot('update', $restaurant)) {
            abort(403, "You are not authorized to access this restaurant");
        }
        $types = Type::all();
        return view('admin.restaurants.edit', compact('restaurant', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        if (Auth::user()->cannot('update', $restaurant)) {
            abort(403, "You are not authorized to access this restaurant");
        }
        $validated_data = $request->validated();
        if (array_key_exists('types', $validated_data)) {
            $restaurant->types()->sync($validated_data['types']);
        }
        if (array_key_exists("picture", $validated_data)) {
            $percorso = Storage::disk("public")->put('/uploads', $validated_data['picture']);
            $validated_data["picture"] = $percorso;
        } else {
            $validated_data["picture"] = $restaurant->picture;
        }

        $restaurant->update($validated_data);



        return redirect()->route('admin.restaurants.show', $restaurant->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        if (Auth::user()->cannot('delete', $restaurant)) {
            abort(403, "You are not authorized to access this restaurant");
        }
        $restaurant->delete();
        return redirect()->route('admin.restaurants.index');
    }
}
