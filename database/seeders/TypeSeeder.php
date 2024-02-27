<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'pizzeria',
                "ristorante" => [1, 2, 3],
            ],
            [
                'name' => 'ristorante italiano',
                "ristorante" => [1, 2, 3]
            ],
            [
                'name' => 'trattoria',
                'ristorante' => [4, 7],
            ],
            [
                'name' => 'osteria',
                'ristorante' => [5, 8],
            ],
            [
                'name' => 'ristorante di pesce',
                'ristorante' => [6, 9],
            ],
            [
                'name' => 'pasta fresca',
                'ristorante' => [7],
            ],
            [
                'name' => 'cucina toscana',
                'ristorante' => [8],
            ],
            [
                'name' => 'ristorante moderno',
                'ristorante' => [8, 9],
            ],
            [
                'name' => 'enoteca',
                'ristorante' => [10],
            ],
            [
                'name' => 'cucina tradizionale',
                'ristorante' => [4, 5, 6, 8],
            ],
            [
                'name' => 'cucina cinese',
                'ristorante' => [11],
            ],
        ];

        foreach ($categories as $category) {
            $newCategory = new Type();
            $newCategory->name = $category["name"];
            $newCategory->save();
            foreach ($category["ristorante"] as $ristorante) {
                $newCategory->restaurants()->attach($ristorante);
            }
        }
    }
}
