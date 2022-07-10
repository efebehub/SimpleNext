<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_entidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('domicilio');
            $table->string('cuit');
            $table->integer('idtipoiva');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->string('telefono3');
            $table->integer('escliente');
            $table->integer('esproveed');
            $table->integer('esentfina');
            
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
        Schema::dropIfExists('entidads');
    }
}
