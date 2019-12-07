<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Arthu',
        	'email' => 'arthuviniciusdemetriosantiago@gmail.com',
        	'password' => Hash::make('password'),
        	'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'Jeffery',
            'email' => 'mr.jon@outlook.com',
            'password' => Hash::make('senh@123'),
            'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => Hash::make('admin@123'),
            'remember_token' => str_random(10),
        ]);

    }
}
