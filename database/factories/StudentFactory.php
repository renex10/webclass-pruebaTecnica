<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Degree;
use App\Models\School;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id, // Asigna un usuario aleatorio
            'degree_id' => Degree::inRandomOrder()->first()->id, // Asigna un nivel académico aleatorio (puede ser nulo)
            'school_id' => School::inRandomOrder()->first()->id, // Asigna una escuela aleatoria
        ];
    }
}
