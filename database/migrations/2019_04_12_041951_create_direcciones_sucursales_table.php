<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones_sucursales', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('estado');
            $table->string('municipio');
            $table->string('localidad');
            $table->string('calle');
            $table->string('num_ext');
            $table->string('num_int');
            $table->string('codigo_postal');
            $table->string('otras_referencias');
            $table->integer('telefono_fijo');
            $table->integer('telefono_celular');
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
        Schema::dropIfExists('direcciones_sucursales');
    }
}
