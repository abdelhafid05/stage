<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create a single user
         User::create([
            'name' => 'nada',
            'email' => 'nada123@artical.com',
            'password' => Hash::make('123456789'),
        ]);
        
    }
}