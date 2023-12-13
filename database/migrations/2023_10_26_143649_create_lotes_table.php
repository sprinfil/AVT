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
        Schema::create('lotes', function (Blueprint $table) {
            $table->id();
            $table->string('lote')->nullable();
            $table->string('manzana')->nullable();
            $table->string('catastral')->nullable();
            $table->string('superficie')->nullable();
            $table->integer('precio')->nullable();
            $table->string('noreste')->nullable();
            $table->string('sureste')->nullable();
            $table->string('suroeste')->nullable();
            $table->string('norte')->nullable();
            $table->string('sur')->nullable();
            $table->string('este')->nullable();
            $table->string('oeste')->nullable();
            $table->string('estado')->nullable();
            $table->unsignedBigInteger('zona')->nullable();

            $table->foreign('zona')->references('id')->on('zonas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lotes');
    }
};
