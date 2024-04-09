<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = "admin";
        $password = "adminLOGIN";
        $email = "admin@email.com";

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        Admin::create([
            "full_name" => $name,
            "email" => $email,
            "status" => "success"
        ]);
    }
}
