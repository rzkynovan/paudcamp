<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Rizkzy Novan',
            'role' => 'user',
            'email' => 'rizkynovan21@gmail.com',
            'phone_number' => '085156248950',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('12345678')
        ]);
    }
}
