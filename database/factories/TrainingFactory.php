<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Training>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'topic' => $this->faker->sentence, // Tema de la capacitación
            'type' => $this->faker->randomElement(['remote', 'in-person']), // Tipo de capacitación
            'date' => $this->faker->date, // Fecha de la capacitación
            'school_id' => \App\Models\School::inRandomOrder()->first()->id, // Asigna una escuela aleatoria
        ];
    }
}
