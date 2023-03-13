<?php

namespace Database\Factories\Repositories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductRepositoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->randomNumber(9),
            'name' => fake()->name(),
        ];
    }

    public function getAll()
    {
        return [
            [
                'id' => fake()->randomNumber(9),
                'name' => fake()->name(),
            ]
        ];
    }
}
