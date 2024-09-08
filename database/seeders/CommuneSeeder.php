<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $communes = [
            // Región de Arica y Parinacota (id = 1)
            ['nombre' => 'Arica', 'region_id' => 1],
            ['nombre' => 'Camarones', 'region_id' => 1],

            // Región de Tarapacá (id = 2)
            ['nombre' => 'Iquique', 'region_id' => 2],
            ['nombre' => 'Alto Hospicio', 'region_id' => 2],

            // Región de Antofagasta (id = 3)
            ['nombre' => 'Antofagasta', 'region_id' => 3],
            ['nombre' => 'Calama', 'region_id' => 3],
            ['nombre' => 'Tocopilla', 'region_id' => 3],

            // Región Metropolitana de Santiago (id = 7)
            ['nombre' => 'Santiago', 'region_id' => 7],
            ['nombre' => 'Maipú', 'region_id' => 7],
            ['nombre' => 'Puente Alto', 'region_id' => 7],

            // Región del Biobío (id = 11)
            ['nombre' => 'Concepción', 'region_id' => 11],
            ['nombre' => 'Los Ángeles', 'region_id' => 11],
            ['nombre' => 'Talcahuano', 'region_id' => 11],

            // Otras comunas y regiones...
        ];

        DB::table('communes')->insert($communes);
    }
}
