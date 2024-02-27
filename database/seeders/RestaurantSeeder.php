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
                'name' => 'Pizzeria da Gigi',
                'user_id' => 3,
                'address' => 'Viale italia 1',
                'description' => "Da Gigi, ogni fetta di pizza è un viaggio nel cuore della cucina italiana. Un ambiente accogliente e familiare completa l'esperienza, rendendo la Pizzeria da Gigi il luogo ideale per assaporare il meglio della vera pizza italiana.",
                'vat' => '12345968745',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/706108675/display_1500/stock-photo-italian-pizza-is-cooked-in-a-wood-fired-oven-706108675.jpg'
            ],
            [
                'name' => 'Pizzeria da Luigi',
                'user_id' => 1,
                'address' => 'Via Belvedere 10',
                'description' => "Da Luigi, ogni pizza è un'opera d'arte gastronomica che unisce la tradizione alla creatività. In un ambiente accogliente e familiare, Pizzeria da Luigi è il luogo dove l'amore per la pizza si traduce in un'indimenticabile esperienza gastronomica.",
                'vat' => '15962348745',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/2230654237/display_1500/stock-photo-in-restaurant-professional-female-chef-preparing-pizza-adding-ingredients-special-sauce-cheese-2230654237.jpg'
            ],
            [
                'name' => 'Pizzeria da Mario',
                'user_id' => 2,
                'address' => 'Viale del poggio 15',
                'description' => "Da Mario, la nostra passione per la pizza si riflette in ogni dettaglio, dalla crosta croccante che abbraccia sapori tradizionali fino alla varietà di gusti che deliziano il palato. Pizzeria da Mario offre un'esperienza culinaria straordinaria, trasportando i nostri ospiti direttamente nel cuore della cucina italiana.",
                'vat' => '68712345945',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/2144844945/display_1500/stock-photo--pizzeria-with-city-of-naples-view-2144844945.jpg'
            ],
            [
                'name' => 'Trattoria da Paolo',
                'user_id' => 4,
                'address' => 'Via Roma 15',
                'description' => 'Autentica cucina italiana in un ambiente accogliente. Specialità della casa: pasta fatta in casa e piatti tradizionali.',
                'vat' => '98765432101',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1054754711/display_1500/stock-photo-view-of-a-small-local-restaurant-or-trattoria-in-italy-1054754711.jpg',
            ],
            [
                'name' => 'Osteria La Rosa',
                'user_id' => 5,
                'address' => 'Via Garibaldi 8',
                'description' => 'Atmosfera rustica e piatti della tradizione emiliana. Ampia selezione di vini locali.',
                'vat' => '76543210987',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/62353780/display_1500/stock-photo-italian-trattoria-tavern-pienza-tuscany-italy-62353780.jpg',
            ],
            [
                'name' => 'Ristorante il Gabbiano',
                'user_id' => 6,
                'address' => 'Via Mazzini 10',
                'description' => 'Vista panoramica sul mare e cucina mediterranea raffinata. Pesce fresco e ingredienti di alta qualità.',
                'vat' => '54321098765',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1206985765/display_1500/stock-photo-friends-having-a-pasta-dinner-at-home-of-at-a-restaurant-1206985765.jpg',
            ],
            [
                'name' => 'Pasta & Amore',
                'user_id' => 7,
                'address' => 'Corso Vittorio Emanuele 3',
                'description' => 'Dedicato agli amanti della pasta! Ampia varietà di formati e condimenti per soddisfare ogni gusto.',
                'vat' => '43210987654',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/1112458160/display_1500/stock-photo-closeup-of-process-of-making-cooking-homemade-pasta-chef-make-fresh-italian-traditional-pasta-1112458160.jpg',
            ],
            [
                'name' => 'Gusto Toscano',
                'user_id' => 8,
                'address' => 'Piazza del Duomo 12',
                'description' => 'Un viaggio culinario in Toscana. Piatti tradizionali toscani e vini pregiati.',
                'vat' => '32109876543',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/321098765/display_1500/stock-photo-tuscan-cuisine-traditional-italian-cold-cuts-321098765.jpg',
            ],
            [
                'name' => 'Ristorante del Borgo',
                'user_id' => 9,
                'address' => 'Via delle Arti 6',
                'description' => 'Ambiente accogliente e piatti che uniscono tradizione e innovazione. Menu stagionale con ingredienti locali.',
                'vat' => '21098765432',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/105118202/display_1500/stock-photo-empty-glasses-set-in-restaurant-105118202.jpg',
            ],
            [
                'name' => 'La Cantina del Gusto',
                'user_id' => 10,
                'address' => 'Via della Vigna 4',
                'description' => "Esplora il gusto autentico dell'Italia nella nostra cantina. Ampia selezione di vini e prodotti tipici.",
                'vat' => '10987654321',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/147911726/display_1500/stock-photo-empty-outdoor-restaurant-table-at-sunset-147911726.jpg',
            ],
            [
                'name' => 'Shanghai',
                'user_id' => 11,
                'address' => 'Corso Cavour 6',
                'description' => "Ristorante cinese classico o con formula all you can eat.",
                'vat' => '11997755331',
                'picture' => 'https://www.shutterstock.com/shutterstock/photos/102940892/display_1500/stock-photo-young-people-eating-in-a-thai-restaurant-they-eating-with-chopsticks-close-up-on-hands-and-food-102940892.jpg',
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
