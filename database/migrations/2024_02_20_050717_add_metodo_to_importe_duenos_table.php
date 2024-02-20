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
        Schema::table('importe_duenos', function (Blueprint $table) {
            //
            $table->enum('metodo', ['EFECTIVO', 'TRANSFERENCIA', 'CHEQUE', 'DEPOSITO'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('importe_duenos', function (Blueprint $table) {
            //
            $table->dropColumn('metodo');
        });
    }
};
