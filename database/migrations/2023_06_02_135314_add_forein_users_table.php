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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('imobiliaria_id');
            $table->foreign('imobiliaria_id')->references('id')->on('imobiliarias')->onDelete("cascade");;

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['imobiliaria_id']); // Correção: Use o método dropForeign com um array contendo o nome da coluna
            $table->dropColumn('imobiliaria_id');
        });
    }
    
};
