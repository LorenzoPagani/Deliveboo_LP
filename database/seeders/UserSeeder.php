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
            ],
            [
                'name' => 'Federico Bianchi',
                'email' =>  'federicobianchi@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Martina De Luca',
                'email' =>  'martinadeluca@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Marco Esposito',
                'email' =>  'marcoesposito@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Laura Colombo',
                'email' =>  'lauracolombo@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Simone Ferrara',
                'email' =>  'simoneferrara@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Francesca Santoro',
                'email' =>  'francescasantoro@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Paolo Mancini',
                'email' =>  'paolomancini@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Li Wei',
                'email' =>  'liwei@gmail.com',
                'password' => Hash::make('password')
            ],
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
