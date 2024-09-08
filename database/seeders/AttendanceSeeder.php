<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Training;
use App\Models\Attendance;
use Faker\Factory as Faker;
class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Crear instancia de Faker
         $faker = Faker::create();

         // Obtener todos los estudiantes
         $students = Student::all();
 
         // Obtener todas las capacitaciones
         $trainings = Training::all();
 
         // Crear registros de asistencia para cada estudiante
         foreach ($students as $student) {
             // Generar entre 1 y 5 registros de asistencia por estudiante
             for ($i = 0; $i < rand(1, 5); $i++) {
                 Attendance::create([
                     'student_id' => $student->id,
                     'training_id' => $trainings->random()->id, // Selecciona una capacitación aleatoria
                     'attended' => $faker->boolean, // Genera un valor booleano aleatorio para asistencia
                 ]);
             }
         }
     }
       
    }
    

