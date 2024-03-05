<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $files = Storage::disk("public")->files("/uploads");
        foreach ($files as $file) {
            Storage::disk("public")->delete($file);
        }

        $this->call([
            UserSeeder::class,
            RestaurantSeeder::class,
            TypeSeeder::class,
            DishSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
