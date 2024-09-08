<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Commune;
use App\Models\Address;
use App\Models\School;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $communes = Commune::all(); // Obtener todas las comunas
        $addresses = Address::all(); // Obtener todas las direcciones

        $schools = [
            'Colegio San Ignacio',
            'Liceo Arturo Alessandri',
            'Colegio San Juan Evangelista',
            'Liceo Bicentenario de Excelencia',
            'Colegio Saint George',
            'Instituto Nacional General José de San Martín',
        ];

        foreach ($schools as $schoolName) {
            School::create([
                'name' => $schoolName,
                'address_id' => $addresses->random()->id, // Asigna una dirección aleatoria
                'commune_id' => $communes->random()->id, // Asigna una comuna aleatoria
            ]);
        }
    }
}
