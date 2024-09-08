<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeacherTrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id' => \App\Models\Teacher::inRandomOrder()->first()->id, // Asigna un docente aleatorio
            'training_id' => \App\Models\Training::inRandomOrder()->first()->id, // Asigna una capacitación aleatoria
        ];
    }
}
