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

            ['name' => 'Glutine'],
            ['name' => 'Uova'],
            ['name' => 'Frutta a guscio'],
            ['name' => 'Latticini']

        ];

        foreach ($allergens as $allergen) {
            $newAllergen =  new Allergen();
            $newAllergen->name = $allergen["name"];
            $newAllergen->save();
        }
    }
}
