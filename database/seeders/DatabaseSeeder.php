<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Tjardo Ihrig',
            'email' => 'tjardoihrig.zakelijk@gmail.com',
            'password' => bcrypt('Tj@rdo04'),
        ]);
    }
}
