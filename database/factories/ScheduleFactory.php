<?php

namespace Database\Factories;

use App\Models\Laboratory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'day' => $this->faker->text(10),
            'end_at' => $this->faker->time(),
            'laboratory_id' => Laboratory::factory(),
            'start_at' => $this->faker->time(),
        ];
    }
}
