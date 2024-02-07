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
        Schema::table('ventas', function (Blueprint $table) {
            $table->dropColumn('monto');
            $table->decimal('costo_lote',8 ,2)->nullable();
            $table->unsignedBigInteger('zona_id')->nullable();
            $table->decimal('enganche',8 ,2)->nullable();
            $table->integer('meses_pagar')->nullable();
            $table->decimal('monto_mes',8 ,2)->nullable();
            $table->enum('forma_de_pago', ['EFECTIVO', 'TARJETA DEBITO', 'TARJETA CREDITO'])->nullable();
            $table->decimal('pago_con',8 ,2)->nullable();
            $table->decimal('cambio',8 ,2)->nullable();
            $table->string('referencia')->nullable();
            
            $table->foreign('zona_id')->references('id')->on('zonas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ventas', function (Blueprint $table) {
            //
        });
    }
};
