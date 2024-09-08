<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Dni;
use Faker\Factory as Faker;

class DniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           // Crear una instancia de Faker
           $faker = Faker::create();

           // Obtener todos los usuarios
           $users = User::all();
   
           // Crear un DNI para cada usuario
           foreach ($users as $user) {
               Dni::create([
                   'dni_number' => $faker->unique()->numerify('##########'),
                   'user_id' => $user->id,
               ]);
           }
             
            }
    }

