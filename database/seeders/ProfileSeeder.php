<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all(); // Obtenemos todos los usuarios

        foreach ($users as $user) {
            Profile::factory()->create([
                'user_id' => $user->id, // Asociamos el perfil al usuario actual
            ]);
        }
    }
}
