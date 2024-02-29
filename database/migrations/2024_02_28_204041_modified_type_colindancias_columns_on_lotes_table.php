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
        //
        Schema::table('lotes', function (Blueprint $table) {
            // Cambiar el tipo de columna a string
            $table->string('colindancia_noreste_id')->nullable()->change();
            $table->string('colindancia_sureste_id')->nullable()->change();
            $table->string('colindancia_suroeste_id')->nullable()->change();
            $table->string('colindancia_noroeste_id')->nullable()->change();
            $table->string('colindancia_norte_id')->nullable()->change();
            $table->string('colindancia_sur_id')->nullable()->change();
            $table->string('colindancia_este_id')->nullable()->change();
            $table->string('colindancia_oeste_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
