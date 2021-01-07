<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('empresa_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('imagem');
            $table->integer('quantidade_clique')->default(0);
            $table->integer('quantidade_visualizacao')->default(0);
            $table->string('descricao')->nullable();
            $table->string('link')->nullable();
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->string('situacao');


            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')->onDelete('cascade');

                  $table->foreign('empresa_id')
                  ->references('id')
                  ->on('empresas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anuncios');
    }
}
