<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dni>
 */
class DniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni_number' => $this->faker->unique()->numerify('##########'), // Número de DNI único
            'user_id' => \App\Models\User::inRandomOrder()->first()->id, // Asigna un usuario aleatorio
        ];
    }
}
