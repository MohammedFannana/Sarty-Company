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
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sarty',
            'password' => Hash::make('AS@$Sarty6250'),
            'email' => 'sarty.company@gmail.com',
            'type' => 'super_admin'
        ]);
    }
}
