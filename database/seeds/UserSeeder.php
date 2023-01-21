<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'id' => 1,
            'usuario' => 'admin',
            'condicion' => 1,
            'idrol' => 1,
            'password' => bcrypt('password'),
            'remember_token' => str_random(10)
        ]);

        User::create([
            'id' => 2,
            'usuario' => 'vendedor',
            'condicion' => 1,
            'idrol' => 2,
            'password' => bcrypt('password'),
            'remember_token' => str_random(10)
        ]);
        User::create([
            'id' => 3,
            'usuario' => 'almacenero',
            'condicion' => 1,
            'idrol' => 3,
            'password' => bcrypt('password'),
            'remember_token' => str_random(10)
        ]);
    }
}