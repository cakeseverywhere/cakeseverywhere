<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantesPromocionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variantes_promociones', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('fk_id_variante')->unsigned();
            $table->integer('fk_id_promociones')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');

            $table->foreign('fk_id_variante')
                ->references('id')
                ->on('variantes');

            $table->foreign('fk_id_promociones')
                ->references('id')
                ->on('promociones');
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
        Schema::dropIfExists('variantes_promociones');
    }
}
