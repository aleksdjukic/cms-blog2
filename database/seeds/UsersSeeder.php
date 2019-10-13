<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role_id' => 1,
            'is_active' => 1,
            'photo_id' =>1,
            'password' => bcrypt('adminadmin')
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role_id' => 2,
            'is_active' => 1,
            'photo_id' =>2,
            'password' => bcrypt('useruser')

        ]);

        User::create([
            'name' => 'Ana Markovic',
            'email' => 'ana@gmail.com',
            'role_id' => 2,
            'is_active' => 1,
            'photo_id' =>3,
            'password' => bcrypt('useruser')

        ]);

        User::create([
            'name' => 'Katarina Peric',
            'email' => 'katarina@gmail.com',
            'role_id' => 2,
            'is_active' => 1,
            'photo_id' =>4,
            'password' => bcrypt('useruser')

        ]);
    }
}
