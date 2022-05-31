<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TuteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomT' => $this->faker->name,
            'prenomT' => $this->faker->name,
            'numeroT' => $this->faker->phoneNumber,
            'created_at' => now(),
        ];
    }
}
