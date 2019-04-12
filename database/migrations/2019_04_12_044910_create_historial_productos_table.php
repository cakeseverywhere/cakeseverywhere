<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_productos', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('fk_id_producto');
            $table->unsignedInteger('fk_id_produclasi');

            $table->foreign('fk_id_producto')
                ->references('id')
                ->on('productos');

            $table->foreign('fk_id_produclasi')
                ->references('id')
                ->on('producto_clasificaciones');
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
        Schema::dropIfExists('historial_productos');
    }
}
