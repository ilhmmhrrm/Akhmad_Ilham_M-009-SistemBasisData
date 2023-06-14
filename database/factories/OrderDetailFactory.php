<?php

namespace Database\Factories;

use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    protected $model = OrderDetail::class;

    public function definition()
    {
        return [
            'OrderID' => rand(1, 5),
            'ProductID' => rand(1, 10),
            'UnitPrice' => $this->faker->randomFloat(2, 0, 100),
            'Quantity' => $this->faker->randomNumber(),
            'Discount' => $this->faker->randomFloat(2, 0, 1),
        ];
    }
}
