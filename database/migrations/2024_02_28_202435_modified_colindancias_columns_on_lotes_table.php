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
            $table->dropForeign('lotes_colindancia_noreste_id_foreign');
            $table->dropForeign('lotes_colindancia_sureste_id_foreign');
            $table->dropForeign('lotes_colindancia_suroeste_id_foreign');
            $table->dropForeign('lotes_colindancia_noroeste_id_foreign');
            $table->dropForeign('lotes_colindancia_norte_id_foreign');
            $table->dropForeign('lotes_colindancia_sur_id_foreign');
            $table->dropForeign('lotes_colindancia_este_id_foreign');
            $table->dropForeign('lotes_colindancia_oeste_id_foreign');
            // Continúa con el cambio de tipo de columna u otros cambios necesarios
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
