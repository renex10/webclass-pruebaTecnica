<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RegionSeeder::class,
            CommuneSeeder::class,
            AddressSeeder::class,
            PhoneSeeder::class,
            ProfileSeeder::class,
            SchoolSeeder::class,
            TrainingSeeder::class,
            DegreeSeeder::class,
            TeacherSeeder::class,
            LevelSeeder::class,
            StudentSeeder::class,
            AcademicSeeder::class,  
            AttendanceSeeder::class,
            DniSeeder::class,
            TeacherTrainingSeeder::class
            ]);

    }
}
