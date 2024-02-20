<?php

namespace Database\Seeders;


use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [

            'name' => 'Pizza',
            'name' => 'Pomodoro',
            'name' => 'Funghi',
            'name' => 'Prosciutto',
        
        ];

        foreach ($ingredients as $ingredient) {
            $newIngredient =  new Ingredient();
            $newIngredient->name = $ingredient["name"];
            $newIngredient->save();
        }
    }
}
