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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('apellido_1')->nullable();
            $table->string('apellido_2')->nullable();
            $table->string('estado')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono')->nullable();
            $table->string('lugar_nac')->nullable();
            $table->timestamp('fecha_nac')->useCurrent()->format('d-m-Y');
            $table->string('nacionalidad')->nullable();
            $table->string('colonia')->nullable();
            $table->string('direccion')->nullable();
            $table->string('rfc')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('curp')->nullable();
            $table->string('ine')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('otros')->nullable();

            $table->string('referencia1_nombre')->nullable();
            $table->string('referencia1_cel')->nullable();
            $table->string('referencia1_parentesco')->nullable();

            $table->string('referencia2_nombre')->nullable();
            $table->string('referencia2_cel')->nullable();
            $table->string('referencia2_parentesco')->nullable();
            $table->string('_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
