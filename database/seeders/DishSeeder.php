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
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'picture' => 'https://www.shutterstock.com/it/image-photo/pizza-margherita-mozzarella-isolated-on-white-582934354',
            ],
            [
                'name' => 'quattro stagioni',
                'price' => 8.0,
                "restaurant_id" => 2,
                'description' => 'descrizione lunga',
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, prosciutto, funghi, olive, carciofi',
                'picture' => 'https://www.shutterstock.com/it/image-photo/homemade-pizza-four-seasons-tomatoes-mozzarella-2238604689',
            ],
            [
                'name' => 'capricciosa',
                'price' => 7.5,
                "restaurant_id" => 1,
                'description' => 'descrizione lunga',
                'visible' => true,
                'ingredients' => 'pomodoro, mozzarella, prosciutto, funghi, olive',
                'picture' => 'https://www.shutterstock.com/it/image-photo/tasty-italian-capricciosa-pizza-fresh-ingredients-1758758507',
            ],
        ];

        foreach ($dishes as $dish) {
            $newDish =  new Dish();
            $newDish->name = $dish["name"];
            $newDish->price = $dish["price"];
            $newDish->description = $dish["description"];
            $newDish->visible = $dish["visible"];
            $newDish->restaurant_id = $dish["restaurant_id"];
            $newDish->ingredients= $dish["ingredients"];
            $newDish->picture = $dish["picture"];
            $newDish->save();
        }
    }
}
