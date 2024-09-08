<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'street' => $this->faker->streetName,
            'number' => $this->faker->buildingNumber,
            'apartment' => $this->faker->word, // Siempre asigna un valor
            'commune_id' => \App\Models\Commune::inRandomOrder()->first()->id, // Asigna una comuna aleatoria
        ];
        
    }
}
