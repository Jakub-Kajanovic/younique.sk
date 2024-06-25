<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Bibiána Čermáková',
            'email' => 'cermakova@younique.sk',
            'password' => Hash::make('Younique123!'),
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'Lucia Barkolová',
            'email' => 'barkolova@younique.sk',
            'password' => Hash::make('Younique123!'),
            'is_admin' => true,
        ]);
    }
}