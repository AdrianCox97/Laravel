<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPivoteEtiquetasProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiquetas_productos', function (Blueprint $table) {
            $table->integer('etiqueta_id')->unsigned()->require();
            $table->integer('producto_id')->unsigned()->require();
            $table->foreign('etiqueta_id')->references('id')->on('etiquetas');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->primary(['etiqueta_id', 'producto_id']);
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
        Schema::dropIfExists('etiquetas_productos');
    }
}