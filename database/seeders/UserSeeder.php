<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Andrés', 'email' => 'andres@andres.com' , 'password'=> '123'],
            ['name' => 'Pepe', 'email' => 'pepe@pepe.com' , 'password'=> '123'],
            ['name' => 'Marta', 'email' => 'marta@marta.com' , 'password'=> '123'],
        ];

        User::insert($users);
    }
}
