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
        Schema::create('corretores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('foto')->nullable();;
            $table->string('email');
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->integer('telefone')->nullable();
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
        Schema::dropIfExists('corretores');
    }
};
