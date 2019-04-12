<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('fk_id_direccion');
            $table->string('nombre_sucursal');
            $table->string('propietario');
            $table->date('fecha_registro');

            $table->foreign('fk_id_direccion')
                ->references('id')
                ->on('direcciones_sucursales');
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
        Schema::dropIfExists('sucursales');
    }
}