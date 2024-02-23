<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot("quantity");
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function allergens()
    {
        return $this->belongsToMany(Allergen::class);
    }
    protected $fillable = [
        'name',
        'description',
        'price',
        'picture',
        'visible',
        'ingredients',
        'restaurant_id',
    ];
}
