<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'username' => 'zizan',
            'password' => Hash::make('123'),
        ]);

        User::create([
            'username' => 'celuler',
            'password' => Hash::make('123'),
        ]);
    }
}
