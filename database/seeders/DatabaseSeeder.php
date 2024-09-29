<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'username' => 'superadmin',
            'password' => bcrypt('bismillah'), // Enkripsi password
        ]);
        $this->call([
            ProductSeeder::class,
        ]);
    }
}