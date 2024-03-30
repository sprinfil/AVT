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
        Schema::create('pago_duenos', function (Blueprint $table) {
            $table->id();

            $table->dateTime('periodo_inicio')->nullable();
            $table->dateTime('periodo_final')->nullable();
            $table->string('archivo')->nullable();
            $table->decimal('monto', 20 ,2)->nullable();
            $table->string('metodo_pago')->nullable();

            $table->unsignedBigInteger('zona_id')->nullable();
            $table->foreign('zona_id')->references('id')->on('zonas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago_duenos');
    }
};
