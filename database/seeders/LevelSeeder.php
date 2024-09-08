<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array de niveles y descripciones
        $levels = [
            ['level' => 'Diamante', 'description' => 'El nivel más alto'],
            ['level' => 'Oro', 'description' => 'Segundo nivel más alto'],
            ['level' => 'Plata', 'description' => 'Nivel intermedio'],
            ['level' => 'Bronce', 'description' => 'Nivel básico'],
        ];

        // Obtener todos los IDs de profesores
        $teacherIds = DB::table('teachers')->pluck('id');

        // Asignar niveles a cada profesor
        foreach ($teacherIds as $teacherId) {
            foreach ($levels as $level) {
                DB::table('levels')->insert([
                    'teacher_id' => $teacherId,
                    'level' => $level['level'],
                    'description' => $level['description'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
    }

