<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 posts using the factory
        Post::factory()->count(4)->create();
    }
}

