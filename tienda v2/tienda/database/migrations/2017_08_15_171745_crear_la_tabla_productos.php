<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearLaTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Cambiar la configuración de charset y collation a utf8.
          Cambiarlo en el archivo config>database.php*/
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 250)->require()->unique();
            $table->text('descripcion')->require();
            $table->decimal('precio', 5, 2);
            $table->string('imagen');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null');
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
        Schema::dropIfExists('productos');
    }
}