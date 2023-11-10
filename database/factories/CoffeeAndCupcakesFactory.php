<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CoffeeAndCupcakes>
 */
class CoffeeAndCupcakesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'productName' => $this->faker->sentence(),
            'productPhoto' => '',
            'flavors' => 'chocolate, vanilla, banana',
            'priceBefore' => $this->faker->numberBetween(1, 1000),
            'priceNow' => $this->faker->numberBetween(1, 1000),
            'size' => $this->faker->word(),
            'productIngredients' => $this->faker->paragraph(3),
            'productDescription' => $this->faker->paragraph(5),
        ];
    }
}
