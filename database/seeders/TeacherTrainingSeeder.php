<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeacherTraining;


class TeacherTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Crear registros de capacitación para docentes
       TeacherTraining::factory(20)->create(); // Ajusta el número según sea necesario
    }
}
