<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cedula');
           $table->integer('id_Usuario')->unsigned();
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('email')->nullable();
             $table->string('direccion');
            $table->string('password')->nullable();
            $table->foreign("id_Usuario")->references('id')->on('users');
            $table->rememberToken();
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
        Schema::drop('pacientes');
    }
}
