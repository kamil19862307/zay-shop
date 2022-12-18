<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Featured>
 */
class FeaturedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => fake()->name(),
            'stars' => fake()->numberBetween(1, 5),
            'price' => fake()->numberBetween(99, 699),
            'preview' => fake()->text(125),
            'description' => fake()->text(255),
            'reviews' => fake()->numberBetween(21, 89),
            'thumbnail' => fake()->text(5),

        ];
    }
}
