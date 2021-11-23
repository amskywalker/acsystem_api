<?php

namespace Database\Factories;

use App\Models\Laboratory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaboratoryAccessFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'laboratory_id' => Laboratory::factory(),
            'date' => $this->faker->date(),
            'hour' => $this->faker->time(),
            'justification' => $this->faker->text(),
        ];
    }
}
