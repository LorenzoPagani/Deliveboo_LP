<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            [
                'name' => 'margherita',
                'price' => 6.0,
                'description' => 'descrizione lunga',
                "restaurant_id" => 3,
                'visible' => true,
            ],
            [
                'name' => 'quattro stagioni',
                'price' => 8.0,
                "restaurant_id" => 2,
                'description' => 'descrizione lunga',
                'visible' => true,
            ],
            [
                'name' => 'capricciosa',
                'price' => 7.5,
                "restaurant_id" => 1,
                'description' => 'descrizione lunga',
                'visible' => true,
            ],
        ];

        foreach ($dishes as $dish) {
            $newDish =  new Dish();
            $newDish->name = $dish["name"];
            $newDish->price = $dish["price"];
            $newDish->description = $dish["description"];
            $newDish->visible = $dish["visible"];
            $newDish->restaurant_id = $dish["restaurant_id"];
            $newDish->save();
        }
    }
}
