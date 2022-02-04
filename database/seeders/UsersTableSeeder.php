<?php

namespace Database\Seeders;

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
                'password' => bcrypt('12Konrad34'),
            ],
            ];

                User::insert($users);
    }
}
