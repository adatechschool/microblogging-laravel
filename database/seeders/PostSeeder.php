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
    public function run(): void
    {
        //create Annie Easley post
        Post::factory()->count(2)->create([
            'created_at' => fake() -> dateTime($max = 'now', $timezone = null),
            'updated_at' => fake() -> dateTime($max = 'now', $timezone = null),
            'author_id' => fake() -> numberBetween(1,2),
            'post_content' => fake() -> paragraph,
            'url_img' => fake() -> imageUrl($width = 640, $height = 480),
            
        ]);
        // Create 10 posts using the factory
        Post::factory()->count(4)->create();

    }
}

