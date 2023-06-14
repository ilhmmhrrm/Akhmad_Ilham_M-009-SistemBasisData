<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'ProductName' => $this->faker->word,
            'CategoryID' => rand(1, 3),
            'QuantityPerUnit' => $this->faker->randomNumber(),
            'UnitPrice' => $this->faker->randomFloat(2, 0, 100),
            'UnitsInStock' => $this->faker->randomNumber(),
            'UnitsOnOrder' => $this->faker->randomNumber(),
            'ReorderLevel' => $this->faker->randomNumber(),
            'Discontinued' => $this->faker->boolean,
        ];
    }
}
