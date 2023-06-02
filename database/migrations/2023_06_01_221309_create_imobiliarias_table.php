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
        Schema::create('imobiliarias', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('creci');
            $table->string('logo');
            $table->string('email');
            $table->string('whatsapp')->nullable();;
            $table->string('instagram')->nullable();;
            $table->string('facebook')->nullable();;
            $table->integer('telefone')->nullable();;
            $table->string('cor');
            $table->text('descricao')->nullable();;
            $table->string('palavras_chaves')->nullable();;
            $table->string('titulo')->nullable();;
            $table->unsignedBigInteger('endereco_id');
            $table->timestamps();

            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete("cascade");;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('imobiliarias');
    }
};
