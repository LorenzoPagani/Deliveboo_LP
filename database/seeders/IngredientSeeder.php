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

            [
                'name' => 'Pizza',
                "piatto" => [1, 2, 3]
            ],
            [
                'name' => 'Pomodoro',
                "piatto" => [1, 2, 3]
            ],
            [
                'name' => 'Funghi',
                "piatto" => [2, 3]
            ],
            [
                'name' => 'Prosciutto',
                "piatto" => [2, 3]
            ]

        ];

        foreach ($ingredients as $ingredient) {
            $newIngredient =  new Ingredient();
            $newIngredient->name = $ingredient["name"];
            $newIngredient->save();
            foreach ($ingredient["piatto"] as $piatto_id) {
                $newIngredient->dishes()->attach($piatto_id);
            }
        }
    }
}
