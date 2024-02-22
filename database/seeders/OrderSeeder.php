<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [

            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'restaurant_id' => 2,
                'piatti' => [
                    [
                        "piatto" => 3,
                        "quantita" => 2
                    ]
                ],
                'name' => 'Mario Rossi',
                'email' => 'mariorossi@gmail.it',
                'address' => 'Via Roma 12',
                'total' => 12.00,

            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'restaurant_id' => 1,
                'piatti' => [
                    [
                        "piatto" => 3,
                        "quantita" => 1
                    ],
                    [
                        "piatto" => 1,
                        "quantita" => 1
                    ]

                ],
                'name' => 'Giovanni Verdi',
                'email' => 'gioverdi@hotmail.com',
                'address' => 'Viale Italia 21',
                'total' => 13.50,
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'restaurant_id' => 3,
                'piatti' => [
                    [
                        "piatto" => 1,
                        "quantita" => 2
                    ]

                ],
                'name' => 'Gloria Ferrari',
                'email' => 'gloriaferrari@virgilio.it',
                'address' => 'Via dei vespri 16',
                'total' => 15.00,
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                "restaurant_id" => 3,
                'piatti' => [
                    [
                        "piatto" => 1,
                        "quantita" => 1
                    ],
                    [
                        "piatto" => 2,
                        "quantita" => 1
                    ],
                    [
                        "piatto" => 3,
                        "quantita" => 1
                    ]

                ],
                'name' => 'Marco Russo',
                'email' => 'marcorusso@gmail.it',
                'address' => 'Via Marx 7',
                'total' => 21.50,
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                "restaurant_id" => 2,
                'piatti' => [
                    [
                        "piatto" => 1,
                        "quantita" => 1
                    ],
                    [
                        "piatto" => 2,
                        "quantita" => 2
                    ]

                ],
                'name' => 'Roberta Bianchi',
                'email' => 'robybianchi@hotmail.it',
                'address' => 'Via Verdi 8',
                'total' => 15.50,
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                "restaurant_id" => 2,
                'piatti' => [
                    [
                        "piatto" => 1,
                        "quantita" => 1
                    ]

                ],
                'name' => 'Luca Costa',
                'email' => 'lucacosta@gmail.it',
                'address' => 'Viale Garibaldi 5',
                'total' => 7.50,
            ]

        ];

        foreach ($orders as $order) {
            $newOrder =  new Order();
            $newOrder->date = $order["date"];
            $newOrder->restaurant_id = $order["restaurant_id"];
            $newOrder->name = $order["name"];
            $newOrder->email= $order["email"];
            $newOrder->address = $order["address"];
            $newOrder->total = $order["total"];
            $newOrder->save();
            foreach ($order["piatti"] as $piatto) {
                $newOrder->dishes()->attach($piatto["piatto"], ["quantity" => $piatto["quantita"]]);
            }
        }
    }
}
