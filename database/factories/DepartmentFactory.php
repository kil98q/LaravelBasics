<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'department_name' => 'Department ' . fake()->colorName(),
            'name_postman' => fake()->firstNameFemale(),
            //
            'amount_of_used_coffee_cups' => fake()->numberBetween(0, 2000),
            //
            'is_coffee_drinkable' => fake()->boolean(70),
        ];
    }
}
