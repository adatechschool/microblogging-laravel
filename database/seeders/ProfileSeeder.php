<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 4 profiles using the factory
        Profile::factory()->count(4)->create();
    }
}

