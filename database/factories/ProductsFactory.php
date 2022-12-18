<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
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
            'rating' => fake()->numberBetween(1, 5),
            'comments' => fake()->numberBetween(23, 69),
            'price' => fake()->numberBetween(99, 699),
            'brand' => fake()->company(),
            'description' => fake()->text(255),
            'color' => fake()->colorName(),
            'specification' => fake()->text(50),
            'thumbnail' => fake()->text(5),

        ];
    }
}
