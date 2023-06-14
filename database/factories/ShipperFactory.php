<?php

namespace Database\Factories;

use App\Models\Shipper;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipperFactory extends Factory
{
    protected $model = Shipper::class;

    public function definition()
    {
        return [
            'CompanyName' => $this->faker->company,
            'Phone' => $this->faker->phoneNumber,
        ];
    }
}
