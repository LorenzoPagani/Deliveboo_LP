<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Gianfranco Teodori',
                'email' =>  'gianfrancoteodori@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Gianna Romiti',
                'email' =>  'giannaromiti@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Gloria Rossi',
                'email' =>  'gloriarossi@gmail.com',
                'password' => Hash::make('password')
            ]
        ];

        foreach ($users as $user) {
            $newUser = new User();
            $newUser->name = $user['name'];
            $newUser->email = $user['email'];
            $newUser->password = $user['password'];
            $newUser->save();
        }
    }
}
