<?php

namespace Database\Seeders;

use App\Models\Faction;
use App\Models\Job;
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

        $user = User::factory()->create([
            'name' => 'Tataru',
            'last_name' => 'Taru',
            'email' => 'tatarutaru@scions.com',
            'password' => 'tataru'
        ]);

        Faction::factory()->for($user)->create([
            'name' => 'Scions of the 7th Dawn', 
        ]);

        Job::factory(20)->create();
        

    }
}
