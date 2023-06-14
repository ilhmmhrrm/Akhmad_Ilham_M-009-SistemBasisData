<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'CompanyName' => $this->faker->company,
            'ContactName' => $this->faker->name,
            'ContactTitle' => $this->faker->jobTitle,
            'Address' => $this->faker->streetAddress,
            'City' => $this->faker->city,
            'Region' => $this->faker->stateAbbr,
            'PostalCode' => $this->faker->postcode,
        ];
    }
}
