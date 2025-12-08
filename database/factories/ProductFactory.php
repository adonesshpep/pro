<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            's_name'=>fake()->word(),
            's_description'=>fake()->sentence(),
            'price' => fake()->randomFloat(2, 1, 1000),
            'stock_quantity' => fake()->numberBetween(0, 100),
            'category_id' => \App\Models\Category::factory(),
            'delivery_option' => fake()->word(),
            'price_after_discount' => null,
        ];
    }
}
