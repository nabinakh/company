<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = array(
            'name' => 'Admin',
            'email' => 'admin@kotuko.it',
            'password' => Hash::make("admin@123"),
        );
        if (Admin::where('email', $admin['email'])->count() <= 0) {
            Admin::insert($admin);
        }
    }
}
