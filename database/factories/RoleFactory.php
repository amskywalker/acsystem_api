<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'active' => $this->faker->boolean,
        ];
    }

    public function active(): RoleFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'active' => true,
            ];
        });
    }
}
