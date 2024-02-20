<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'pizzeria',
                'description' => 'descrizione 1 ',
            ],
            [
                'name' => 'ristorante italiano',
                'description' => 'descrizione 2 ',
            ], 
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category["name"];
            $newCategory->description = $category["description"];
            
            $newCategory->save();
        }
    }
}
