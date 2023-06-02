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
        Schema::create('imovel_imagems', function (Blueprint $table) {
            $table->id();
            $table->string('imagem');
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
        Schema::dropIfExists('imovel_imagems');
    }
};
