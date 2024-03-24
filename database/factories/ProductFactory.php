<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use App\Models\unitOfMeasure;
use App\Models\warehouse;
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
            'code' => fake()->numerify('product-####'),
            'cost' => fake()->randomNumber(3, false),
            'unit_of_measure_id' => unitOfMeasure::all()->random()->id,
            'warehouse_id' => warehouse::all()->random()->id,
            'type' => fake()->randomElement(['product', 'service']),
            'minimum_stock' => fake()->numberBetween(1,100),
            'initial_stock' => fake()->numberBetween(1,100),
            'category_id' => ProductCategory::all()->random()->id,
            'status' => 1
        ];
    }
}
