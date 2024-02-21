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
            //
            $table->decimal('costo_lote',20 ,2)->change()->nullable();
            $table->decimal('enganche',20 ,2)->change()->nullable();
            $table->decimal('monto_mes',20 ,2)->change()->nullable();
            $table->decimal('pago_con',20 ,2)->change()->nullable();
            $table->decimal('cambio',20 ,2)->change()->nullable();
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
