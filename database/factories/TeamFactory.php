<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'league' => $this->faker->randomElement($array=['九州A','九州B','福岡県A','福岡県B']),
            'manager_name' => $this->faker->name,
            'manager_phone' => $this->faker->phoneNumber(),
            'manager_email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
