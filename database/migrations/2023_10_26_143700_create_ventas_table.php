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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('contrato')->nullable();
            $table->unsignedBigInteger('comprador');
            $table->unsignedBigInteger('lote');
            $table->unsignedBigInteger('aval');
            $table->unsignedBigInteger('vendedor');



            $table->foreign('comprador')->references('id')->on('personas');
            $table->foreign('lote')->references('id')->on('personas');
            $table->foreign('aval')->references('id')->on('personas');
            $table->foreign('vendedor')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
