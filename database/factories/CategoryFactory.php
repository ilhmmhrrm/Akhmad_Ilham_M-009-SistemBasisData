<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'CategoryName' => $this->faker->word,
            'Description' => $this->faker->sentence,
            'Picture' => $this->faker->imageUrl(),
        ];
    }
}
