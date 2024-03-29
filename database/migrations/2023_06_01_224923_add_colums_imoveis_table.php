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
        Schema::table('imoveis', function (Blueprint $table) {
            $table->unsignedBigInteger('tipo_id');

            $table->foreign('tipo_id')->references('id')->on('tipo_imoveis')->onDelete("cascade");;

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('imoveis', function (Blueprint $table) {
            $table->dropForeign(['tipo_id']); // Correção: Use o método dropForeign com um array contendo o nome da coluna
            $table->dropColumn('tipo_id');
        });
    }

};
