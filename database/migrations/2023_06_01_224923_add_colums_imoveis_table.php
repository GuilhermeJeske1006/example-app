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
            $table->unsignedBigInteger('tipo_id');

            $table->foreign('tipo_id')->references('id')->on('tipo_imoveis');
            $table->unique('tipo_id');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->unique('endereco_id');

            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('imoveis', function (Blueprint $table) {
            

            $table->dropColumn('status');
            $table->dropColumn('valor');
            $table->dropColumn('foto_capa');
            $table->dropColumn('banheiro');
            $table->dropColumn('quarto');
            $table->dropColumn('garagem');
            $table->dropColumn('area_toal');
            $table->dropColumn('video');
            $table->dropColumn('localizacao');
            $table->dropColumn('descricao');
            $table->dropColumn('endereco_id');
            $table->dropColumn('imovel_id');
        });
    }
};
