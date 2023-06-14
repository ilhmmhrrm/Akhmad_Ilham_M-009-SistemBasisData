<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'LastName' => $this->faker->lastName,
            'FirstName' => $this->faker->firstName,
            'Title' => $this->faker->jobTitle,
            'TitleCourtesy' => $this->faker->title,
            'BirthDate' => $this->faker->date(),
            'HireDate' => $this->faker->date(),
            'Address' => $this->faker->streetAddress,
            'City' => $this->faker->city,
            'Region' => $this->faker->state,
        ];
    }
}
