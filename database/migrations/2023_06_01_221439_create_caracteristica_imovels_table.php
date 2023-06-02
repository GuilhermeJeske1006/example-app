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
        Schema::create('caracteristica_imoveis', function (Blueprint $table) {
            $table->id();
            $table->string('nome_caracteristica');
            $table->unsignedBigInteger('imovel_id');
            $table->timestamps();
            $table->foreign('imovel_id')->references('id')->on('imoveis');
            $table->unique('imovel_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracteristica_imovels');
    }
};
