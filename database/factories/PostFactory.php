<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
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
        $title = fake()->sentence();
        return [
            'title' => $title,
            'content' => fake()->paragraph(100),
            'image' => "scary1.jpg",
            'user_id' => User::factory(),
            'rating' => fake()->randomFloat(2, 1, 5),
            'votes' => fake()->numberBetween(0, 1000),
            'slug' => Str::slug($title),
            'category' => fake()->word(),
        ];
    }
}
