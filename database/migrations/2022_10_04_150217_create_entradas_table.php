<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titulo', 300);
            $table->string('resumen', 600);
            $table->string('imagen_url', 300);
            $table->unsignedInteger('usuario_id'); 
            $table->unsignedInteger('categoria_id'); 
            $table->integer('destacado');  
            $table->integer('visualizaciones'); 
            $table->foreign('usuario_id')->references('id')->on('usuarios'); 
            $table->foreign('categoria_id')->references('id')->on('categorias');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entradas');
    }
};
