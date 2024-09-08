<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $degrees = [
            'Pre-Kínder', // Nivel Pre-Kínder (opcional)
            'Kínder', // Nivel Kínder
            'Primero Básico', // Primero Básico
            'Segundo Básico', // Segundo Básico
            'Tercero Básico', // Tercero Básico
            'Cuarto Básico', // Cuarto Básico
            'Quinto Básico', // Quinto Básico
            'Sexto Básico', // Sexto Básico
            'Séptimo Básico', // Séptimo Básico
            'Octavo Básico', // Octavo Básico
            'Primero Medio', // Primero Medio
            'Segundo Medio', // Segundo Medio
            'Tercero Medio', // Tercero Medio
            'Cuarto Medio', // Cuarto Medio
        ];

        foreach ($degrees as $degree) {
            DB::table('degrees')->insert([
                'name' => $degree,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
    }

