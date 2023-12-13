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
        Schema::create('zonas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre')->nullable();
            $table->unsignedBigInteger('dueno_id')->nullable();

            $table->foreign('dueno_id')->references('id')->on('personas');

            $table->timestamps(); // Esto agregará las columnas created_at y updated_at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zonas');
    }
};
