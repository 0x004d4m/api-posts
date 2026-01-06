<?php

namespace Database\Factories;

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
        $seed = $this->faker->unique()->numberBetween(1, 1000);
    
        return [
            'title' => $this->faker->sentence(6),
            'description' => $this->faker->paragraph(3),
            'image' => "https://picsum.photos/seed/{$seed}/640/480",
        ];
    }

}
