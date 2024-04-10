<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'post_content' => $this -> faker -> paragraph,
            // 'url_img' => $this -> faker -> imageUrl($width = 640, $height = 480),
            // 'author_id' => $this -> faker -> numberBetween(1, 2),
            // 'date_creation' => $this -> faker -> dateTime($max = 'now', $timezone = null),
            
            'post_content' => "Mon chat est trop mignon",
            'url_img' => $this->faker->imageUrl(640, 480, 'cats'),
            'author_id' => 1,
        ];
    }
}
