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
            ],
            [
                'name' => 'ristorante italiano',
            ],
        ];

        foreach ($categories as $category) {
            $newCategory = new Type();
            $newCategory->name = $category["name"];
            $newCategory->save();
        }
    }
}
