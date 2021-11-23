<?php

namespace Database\Factories;

use App\Models\Laboratory;
use Illuminate\Database\Eloquent\Factories\Factory;

class AirConditionerFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'laboratory_id' => Laboratory::factory(),
            'brand' => $this->faker->text(6),
            'type' => $this->faker->text(10),
        ];
    }
}
