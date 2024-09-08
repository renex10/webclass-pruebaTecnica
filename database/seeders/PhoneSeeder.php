<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Recorremos todos los perfiles y les creamos un teléfono
                User::all()->each(function ($user) {
                    Phone::factory()->create([
                        'user_id' => $user->id, // Asociamos el teléfono al perfil actual
                    ]);
                });
    }
}
