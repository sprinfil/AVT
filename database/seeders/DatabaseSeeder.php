<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (!DB::table('seeders_log')->where('seeder_name', 'NombreDelSeeder')->exists()) {
            // Ejecuta el seeder
            $this->call(EntidadesSeeder::class);
        
            // Registra el seeder ejecutado en la tabla
            DB::table('seeders_log')->insert(['EntidadesSeeder' => 'NombreDelSeeder']);
        }
        if (!DB::table('seeders_log')->where('seeder_name', 'NombreDelSeeder')->exists()) {
            // Ejecuta el seeder
            $this->call(MunicipiosSeeder::class);
        
            // Registra el seeder ejecutado en la tabla
            DB::table('seeders_log')->insert(['MunicipiosSeeder' => 'NombreDelSeeder']);
        }
    }
}
