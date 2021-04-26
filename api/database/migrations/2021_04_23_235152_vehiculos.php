<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table){

            $table->increments('id');
            $table->string('placa');
            $table->string('color');
            $table->string('marca');
            $table->string('tipo_vehiculo');
            $table->integer('id_propietario')->unsigned();
            $table->integer('id_conductor')->unsigned();
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
