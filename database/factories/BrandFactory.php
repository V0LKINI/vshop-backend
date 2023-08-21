<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company,
            'code' => fake()->slug,
            'image' => fake()->imageUrl(),
            'description' => fake()->text,
            'active' => fake()->boolean,
            'sort' => fake()->numberBetween(1, 1000),
        ];
    }
}
