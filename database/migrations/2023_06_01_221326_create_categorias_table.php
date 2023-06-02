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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome_categoria', 100);
            $table->unsignedBigInteger('imobiliaria_id');
            $table->timestamps();

            $table->foreign('imobiliaria_id')->references('id')->on('imobiliarias');
            $table->unique('imobiliaria_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
