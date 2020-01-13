<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoupasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roupas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tamanho_id');
            $table->foreign('tamanho_id')->references('id')->on('tamanhos');
            $table->string('descricaoRoupas');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roupas');
    }
}
