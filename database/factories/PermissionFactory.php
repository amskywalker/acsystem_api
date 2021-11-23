<?php

namespace Database\Factories;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $label = $this->faker->sentence;
        $name = Str::slug($label, '_');

        return [
            'label' => $label,
            'name' => $name,
        ];
    }
}
