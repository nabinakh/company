<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = array(
            'name' => 'Admin',
            'email' => 'admin@technologyspot.it',
            'password' => Hash::make("admin@123"),
        );
        if (User::where('email', $user['email'])->count() <= 0) {
            User::insert($user);
        }
    }
}
