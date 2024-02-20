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
