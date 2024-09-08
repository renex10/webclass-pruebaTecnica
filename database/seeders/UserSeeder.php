<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'rene riquelme',
            'email'=>'reneprh2013@gmail.com',
            'password'=>bcrypt('pangaleluney2013')
        ]);
        User::create([
            'name'=>'richard',
            'email'=>'richard@gmail.com',
            'password'=>bcrypt('richard')
        ]);

        User::create([
            'name'=>'fernando',
            'email'=>'fernando@gmail.com',
            'password'=>bcrypt('fernando')
        ]);

        User::factory(97)->create();
    }
}
