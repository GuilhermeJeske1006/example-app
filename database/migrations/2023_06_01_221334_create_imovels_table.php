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
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->string('nome_imovel', 100);
            $table->string('status', 20);
            $table->float('valor', 0);
            $table->string('foto_capa');
            $table->integer('banheiro')->nullable();
            $table->integer('quarto')->nullable();
            $table->integer('garagem')->nullable();
            $table->float('area_toal')->nullable();
            $table->string('video')->nullable();
            $table->string('localizacao')->nullable();
            $table->text('descricao')->nullable();
            $table->unsignedBigInteger('endereco_id');
            
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete("cascade");
            $table->timestamps();

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('imoveis', function (Blueprint $table) {
            $table->dropForeign(['endereco_id']); // Remover a chave estrangeira 'endereco_id'
        });
        Schema::dropIfExists('imoveis');

    }
};
