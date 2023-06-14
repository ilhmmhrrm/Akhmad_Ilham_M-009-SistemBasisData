<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'CustomerID' => rand(1, 5),
            'EmployeeID' => rand(1, 5),
            'OrderDate' => $this->faker->dateTime(),
            'RequiredDate' => $this->faker->dateTime(),
            'ShippedDate' => $this->faker->dateTime(),
            'ShipVia' => rand(1, 2),
            'Freight' => $this->faker->randomFloat(2, 0, 100),
            'ShipName' => $this->faker->name,
            'ShipAddress' => $this->faker->streetAddress,
            'ShipCity' => $this->faker->city,
            'ShipRegion' => $this->faker->stateAbbr,
            'ShipPostalCode' => $this->faker->postcode,
            'ShipCountry' => $this->faker->country,
        ];
    }
}
