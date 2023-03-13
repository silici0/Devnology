<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => fake()->randomFloat('2'),
            'price' => fake()->imageUrl(),
        ];
    }
}
