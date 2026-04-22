<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MunicipioSeeder;
use Database\Seeders\CartorioSeeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            MunicipioSeeder::class,
            CartorioSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
