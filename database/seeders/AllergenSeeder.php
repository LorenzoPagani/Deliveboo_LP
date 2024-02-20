<?php

namespace Database\Seeders;

use App\Models\Allergen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllergenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allergens = [

            [
                'name' => 'Glutine',
                "piatto" => [1, 2, 3]
            ],
            [
                'name' => 'Uova',
                "piatto" => [2, 3]
            ],
            [
                'name' => 'Frutta a guscio',
                "piatto" => []
            ],
            [
                'name' => 'Latticini',
                "piatto" => [1, 2, 3]
            ]

        ];

        foreach ($allergens as $allergen) {
            $newAllergen =  new Allergen();
            $newAllergen->name = $allergen["name"];
            $newAllergen->save();
            foreach ($allergen["piatto"] as $piatto) {
                $newAllergen->dishes()->attach($piatto);
            }
        }
    }
}
