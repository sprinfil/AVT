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
        Schema::create('importes', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->nullable();
            $table->decimal('monto',8 ,2)->nullable();
            $table->timestamp('vencimiento')->useCurrent()->format('d-m-Y H:i');
            $table->unsignedBigInteger('venta');

            $table->foreign('venta')->references('id')->on('ventas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('importes');
    }
};
