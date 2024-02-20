<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [

            'date' => '2024-01-12',
            'date' => '2024-01-13',
            'date' => '2024-01-14',
            'date' => '2024-01-15',
            'date' => '2024-01-16',
            'date' => '2024-01-17',

        ];

        foreach ($orders as $order) {
            $newOrder =  new Order();
            $newOrder->date = $order["date"];
            $newOrder->save();
        }
    }
}
