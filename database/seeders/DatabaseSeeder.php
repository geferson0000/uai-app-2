<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\ActuacionFiscal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
        // $this->call(ActionSeeder::class);
        $this->call(CargoSeeder::class);
        $this->call(TipoAuditoriaSeeder::class);


        // utilizando la factory para crear x numero de filas
        $filas = 20;
        ActuacionFiscal::factory($filas)->create();
    }
}
