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
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'preview' => fake()->text(50),
            'description' => fake()->text(),
//            faker дли thumbnail не работает, faker v2 нужно использовать
            'thumbnail' => fake()->image(storage_path('app\public\posts'), 640, 520, null, false),
        ];
    }
}
