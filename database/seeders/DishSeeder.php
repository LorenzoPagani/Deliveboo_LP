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
                'price' => '6.00',
                'description' => 'descrizione lunga',
                'visible' => '1',
            ],
            [
                'name' => 'quattro stagioni',
                'price' => '8.00',
                'description' => 'descrizione lunga',
                'visible' => '1',
            ],
            [
                'name' => 'capricciosa',
                'price' => '7.50',
                'description' => 'descrizione lunga',
                'visible' => '1',
            ],
        ];

        foreach ($dishes as $dish) {
            $newDish =  new Dish ();
            $newDish->name = $dish["name"];
            $newDish->price = $dish["price"];
            $newDish->description = $dish["description"];
            $newDish->visible = $dish["visible"];
            $newDish->save();
        }
    }
}
