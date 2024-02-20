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
                ]

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

                ]
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                'restaurant_id' => 3,
                'piatti' => [
                    [
                        "piatto" => 1,
                        "quantita" => 2
                    ]

                ]
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

                ]
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

                ]
            ],
            [
                'date' => Carbon::today()->subDays(rand(0, 179))->addSeconds(rand(0, 86400)),
                "restaurant_id" => 2,
                'piatti' => [
                    [
                        "piatto" => 1,
                        "quantita" => 1
                    ]

                ]
            ]

        ];

        foreach ($orders as $order) {
            $newOrder =  new Order();
            $newOrder->date = $order["date"];
            $newOrder->restaurant_id = $order["restaurant_id"];
            $newOrder->save();
            foreach ($order["piatti"] as $piatto) {
                $newOrder->dishes()->attach($piatto["piatto"], ["quantity" => $piatto["quantita"]]);
            }
        }
    }
}
