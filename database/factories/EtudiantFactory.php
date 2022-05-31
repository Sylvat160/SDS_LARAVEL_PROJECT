<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomE' => $this->faker->name,
            'prenomE' => $this->faker->name,
            'date_naissance' => $this->faker->dateTime,
            'mailE' => $this->faker->unique()->safeEmail,
            'numeroE' => $this->faker->phoneNumber,
            'created_at' => now(),
        ];
    }
}
