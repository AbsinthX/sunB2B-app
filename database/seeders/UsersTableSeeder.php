<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'       => 'Admin',
                'email' => 'admin@wp.pl',
                'password' => bcrypt('haslo1234'),
                'role' => UserRole::ADMIN
            ],
            [
                'name'       => 'Worker',
                'email' => 'worker@wp.pl',
                'password' => bcrypt('haslo1234'),
                'role' => UserRole::WORKER
            ],
            [
                'name'       => 'User',
                'email' => 'user@wp.pl',
                'password' => bcrypt('haslo1234'),
                'role' => UserRole::USER
            ],
            ];

                User::insert($users);
    }
}
