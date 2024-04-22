<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
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
            'profile_picture' => fake() -> imageUrl ($width = 128, $height = 128),
            'background_picture' => fake() -> imageUrl ($width = 640, $height = 360),
            'biography' => fake() -> paragraph,
            'github_link' => fake() -> url,
        ];
    }
}
