<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Training;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'student_id' => Student::inRandomOrder()->first()->id, // Asigna un estudiante aleatorio
            'training_id' => Training::inRandomOrder()->first()->id, // Asigna una capacitación aleatoria
            'attended' => $this->faker->boolean, // Genera un valor booleano aleatorio para asistencia
        ];
    }
}
