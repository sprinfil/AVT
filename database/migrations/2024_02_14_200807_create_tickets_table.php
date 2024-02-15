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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_pdf')->nullable();
            $table->enum('metodo_pago', ['EFECTIVO', 'TARJETA CREDITO', 'TARJETA DEBITO'])->nullable();
            $table->decimal('cantidad_abonar',20 ,2)->nullable();
            $table->decimal('pago_con',20 ,2)->nullable();
            $table->string('referencia')->nullable();
            $table->decimal('cambio',20 ,2)->nullable();
            $table->dateTime('fecha')->nullable()->nullable();
            $table->unsignedBigInteger('venta_id')->nullable()->nullable();
            $table->unsignedBigInteger('persona_id')->nullable()->nullable();


            $table->foreign('venta_id')->references('id')->on('ventas'); 
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
