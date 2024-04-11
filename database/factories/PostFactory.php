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
            'created_at' => fake() -> dateTime($max = 'now', $timezone = null),
            'updated_at' => fake() -> dateTime($max = 'now', $timezone = null),
            'author_id' => fake() -> numberBetween(1, 2),
            'post_content' => fake() -> paragraph,
            'url_img' => fake() -> imageUrl($width = 640, $height = 480),
            
            // 'post_content' => "Mon chat est trop mignon",
            // 'url_img' => $this->faker->imageUrl(640, 480, 'cats'),
            // 'author_id' => 1,
        ];
    }
}
