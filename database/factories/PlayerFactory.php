<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'position'=> $this->faker->randomElement($array=['FW', 'BK']),
            'birthday'=> $this->faker->dateTimeBetween('-50 years', '-20years')->format('Y-m-d'),
            'photo' => $this->faker->imageURL,
            'team_id' => $this->faker->numberBetween(1,13)
        ];
    }
}
