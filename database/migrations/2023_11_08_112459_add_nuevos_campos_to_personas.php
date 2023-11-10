<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('personas', function (Blueprint $table) {
            //nuevos datos
            $table->string('sexo')->nullable()->default(NUll);
            $table->string('municipio')->nullable()->default(NUll);
            $table->string('pais')->nullable()->default(NUll);
            $table->string('correo')->nullable()->default(NUll);
            $table->string('ciudad_nac')->nullable()->default(NUll);


            //direccion
            $table->string('calle')->nullable()->default(NUll);
            $table->string('numero_interior')->nullable()->default(NUll);
            $table->string('numero_exterior')->nullable()->default(NUll);
            $table->string('colonia_direccion')->nullable()->default(NUll);
            $table->string('codigo_postal')->nullable()->default(NUll);
            $table->string('municipio_direccion')->nullable()->default(NUll);
            $table->string('estado_direccion')->nullable()->default(NUll);
            $table->string('pais_direccion')->nullable()->default(NUll);

            //foto
            $table->string('foto')->nullable()->default(NUll);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personas', function (Blueprint $table) {
            //
        });
    }
};
