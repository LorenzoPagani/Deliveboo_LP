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
                        "piatto" => 4,
                        "quantita" => 1
                    ]

                ],
                'name' => 'Giovanni Verdi',
                'email' => 'gioverdi@hotmail.com',
                'address' => 'Viale Italia 21',
                'total' => 14.00,
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
                'total' => 12.00,
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
                        "piatto" => 4,
                        "quantita" => 1
                    ],
                    [
                        "piatto" => 9,
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
                "restaurant_id" => 8,
                'piatti' => [
                    [
                        "piatto" => 13,
                        "quantita" => 1
                    ],
                    [
                        "piatto" => 18,
                        "quantita" => 2
                    ]

                ],
                'name' => 'Roberta Bianchi',
                'email' => 'robybianchi@hotmail.it',
                'address' => 'Via Verdi 8',
                'total' => 18.00,
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
                'total' => 6.00,
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'restaurant_id' => 4,
                'piatti' => [
                    [
                        "piatto" => 11,
                        "quantita" => 2
                    ],
                    [
                        "piatto" => 17,
                        "quantita" => 1
                    ]
                ],
                'name' => 'Anna Neri',
                'email' => 'annaneri@gmail.com',
                'address' => 'Via Dante 14',
                'total' => 9.50,
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'restaurant_id' => 5,
                'piatti' => [
                    [
                        "piatto" => 20,
                        "quantita" => 1
                    ],
                    [
                        "piatto" => 11,
                        "quantita" => 2
                    ]
                ],
                'name' => 'Antonio Mancini',
                'email' => 'antoniomancini@hotmail.it',
                'address' => 'Via Garibaldi 22',
                'total' => 18.00,
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'restaurant_id' => 7,
                'piatti' => [
                    [
                        "piatto" => 18,
                        "quantita" => 2
                    ],
                    [
                        "piatto" => 15,
                        "quantita" => 1
                    ]
                ],
                'name' => 'Francesca Rosi',
                'email' => 'francescarosi@gmail.com',
                'address' => 'Via Veneto 7',
                'total' => 18.00,
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'restaurant_id' => 10,
                'piatti' => [
                    [
                        "piatto" => 17,
                        "quantita" => 1
                    ]
                    
                ],
                'name' => 'Paolo Bellini',
                'email' => 'paolobellini@hotmail.it',
                'address' => 'Via XX Settembre 9',
                'total' => 4.50,
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'restaurant_id' => 11,
                'piatti' => [
                    [
                        "piatto" => 23,
                        "quantita" => 2
                    ],
                    [
                        "piatto" => 24,
                        "quantita" => 1
                    ],
                    [
                        "piatto" => 25,
                        "quantita" => 2
                    ]
                ],
                'name' => 'Matteo Rotondo',
                'email' => 'mattrotondo@hotmail.it',
                'address' => 'Via XIV Maggio 9',
                'total' => 23.00,
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'restaurant_id' => 6,
                'piatti' => [
                    [
                        "piatto" => 12,
                        "quantita" => 2
                    ],
                    [
                        "piatto" => 21,
                        "quantita" => 2
                    ],
                   
                ],
                'name' => 'Giovanni Barile',
                'email' => 'JBarrell@hotmail.it',
                'address' => 'Via Ponte 9',
                'total' => 25.00,
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'restaurant_id' => 9,
                'piatti' => [
                    [
                        "piatto" => 13,
                        "quantita" => 2
                    ],
                    [
                        "piatto" => 22,
                        "quantita" => 2
                    ],
                   
                ],
                'name' => 'Bruno Penna',
                'email' => 'brunopenna@hotmail.it',
                'address' => 'Via Aragona 18',
                'total' => 28.00,
            ],
           
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
