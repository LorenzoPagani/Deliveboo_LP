<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $restaurant_id = $user->restaurant->id;
        $dishes = Dish::where('restaurant_id', $restaurant_id)->get();
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDishRequest $request)
    {
        $validati = $request->validated();
        $percorso = Storage::disk("public")->put('/uploads', $request['picture']);
        $validati["picture"] = $percorso;

        $new_Dish = new Dish;
        $user = Auth::user();
        $new_Dish->restaurant_id = $user->restaurant->id;
        $new_Dish->fill($validati);
        $new_Dish->save();
        return redirect()->route('admin.dishes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        if (Auth::user()->cannot('view', $dish)) {
            abort(403, "You are not authorized to access this dish");
        }
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        if (Auth::user()->cannot('update', $dish)) {
            abort(403, "You are not authorized to access this dish");
        }
        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDishRequest $request, Dish $dish)
    {
        if (Auth::user()->cannot('update', $dish)) {
            abort(403, "You are not authorized to access this dish");
        }
        $validati = $request->validated();
        if ($request['picture'])
            $percorso =  Storage::disk("public")->put('/uploads', $request['picture']);
        else
            $percorso = null;

        $validati["picture"] = $percorso;
        $dish->update($validati);
        return redirect()->route('admin.dishes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        if (Auth::user()->cannot('delete', $dish)) {
            abort(403, "You are not authorized to access this dish");
        }
        $dish->delete();
        return redirect()->route('admin.dishes.index');
    }
}
