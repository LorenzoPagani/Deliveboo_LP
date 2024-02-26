<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'pizzeria da Gigi',
                'user_id' => 3,
                'address' => 'via di prova 1',
                'description' => 'descrizione lunga',
                'vat' => '12345968745',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/706108675/display_1500/stock-photo-italian-pizza-is-cooked-in-a-wood-fired-oven-706108675.jpg'
            ],
            [
                'name' => 'pizzeria da Luigi',
                'user_id' => 1,
                'address' => 'via di prova 2',
                'description' => 'descrizione lunga',
                'vat' => '15962348745',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/2230654237/display_1500/stock-photo-in-restaurant-professional-female-chef-preparing-pizza-adding-ingredients-special-sauce-cheese-2230654237.jpg'
            ],
            [
                'name' => 'pizzeria da Mario',
                'user_id' => 2,
                'address' => 'via di prova 3',
                'description' => 'descrizione lunga',
                'vat' => '68712345945',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/2144844945/display_1500/stock-photo--pizzeria-with-city-of-naples-view-2144844945.jpg'
            ],

        ];

        foreach ($restaurants as $restaurant) {
            $newRestaurant =  new Restaurant();
            $newRestaurant->name = $restaurant["name"];
            $newRestaurant->address = $restaurant["address"];
            $newRestaurant->description = $restaurant["description"];
            $newRestaurant->vat = $restaurant["vat"];
            $newRestaurant->user_id = $restaurant["user_id"];
            $newRestaurant->picture = $restaurant["picture"];
            $newRestaurant->save();
        }
    }
}
