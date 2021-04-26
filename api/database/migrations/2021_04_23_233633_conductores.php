<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Conductores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table){

            $table->increments('id');
            $table->bigInteger('cedula');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('telefono');
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
        //
    }
}
