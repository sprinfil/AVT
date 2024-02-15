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
        Schema::table('lotes', function (Blueprint $table) {
            $table->foreignId('colindancia_noreste_id')->nullable()->references('id')->on('lotes');
            $table->foreignId('colindancia_sureste_id')->nullable()->references('id')->on('lotes');
            $table->foreignId('colindancia_suroeste_id')->nullable()->references('id')->on('lotes');
            $table->foreignId('colindancia_noroeste_id')->nullable()->references('id')->on('lotes');
            $table->foreignId('colindancia_norte_id')->nullable()->references('id')->on('lotes');
            $table->foreignId('colindancia_sur_id')->nullable()->references('id')->on('lotes');
            $table->foreignId('colindancia_este_id')->nullable()->references('id')->on('lotes');
            $table->foreignId('colindancia_oeste_id')->nullable()->references('id')->on('lotes');        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lotes', function (Blueprint $table) {
            $table->dropForeign(['colindancia_noreste_id']);
            $table->dropForeign(['colindancia_sureste_id']);
            $table->dropForeign(['colindancia_suroeste_id']);
            $table->dropForeign(['colindancia_noroeste_id']);
            $table->dropForeign(['colindancia_norte_id']);
            $table->dropForeign(['colindancia_sur_id']);
            $table->dropForeign(['colindancia_este_id']);
            $table->dropForeign(['colindancia_oeste_id']);
        });
    }
};
