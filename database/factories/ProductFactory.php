<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->domainName,
            'category' => fake()->colorName,
            'count' => rand(0, 5),
            'price' => '' . rand(1, 150) . '',
            'limit' => rand(0, 5)
        ];
    }
}
