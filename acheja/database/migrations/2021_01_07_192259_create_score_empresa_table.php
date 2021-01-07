<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoreEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_empresa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('score_id')->unsigned();
            $table->bigInteger('empresa_id')->unsigned();

            $table->foreign('score_id')
            ->references('id')
            ->on('scores')->onDelete('cascade');

            $table->foreign('empresa_id')
            ->references('id')
            ->on('empresas')->onDelete('cascade');
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
        Schema::dropIfExists('score_empresa');
    }
}
