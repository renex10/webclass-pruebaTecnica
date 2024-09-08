<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Faker\Factory as Faker;

class AcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Obtener todos los estudiantes existentes
        $students = Student::all();

        // Verificar que haya estudiantes para evitar errores
        if ($students->isEmpty()) {
            $this->command->info('No hay estudiantes disponibles para asignar calificaciones.');
            return;
        }

        foreach ($students as $student) {
            // Crear un número aleatorio de registros académicos para cada estudiante
            $numRecords = rand(1, 5); // Puedes ajustar el rango según sea necesario

            for ($i = 0; $i < $numRecords; $i++) {
                DB::table('academics')->insert([
                    'student_id' => $student->id,
                    'subject' => $faker->word, // Asignatura aleatoria
                    'grade' => rand(1, 7), // Calificación entre 1 y 7, según el sistema chileno
                    'date' => $faker->date(), // Fecha aleatoria
                ]);
            }
        }

        $this->command->info('Datos académicos sembrados correctamente.');
    }
    }

