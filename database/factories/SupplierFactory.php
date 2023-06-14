<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

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

