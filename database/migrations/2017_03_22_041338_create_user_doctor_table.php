<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
              $table->integer('id_Usuario')->unsigned();
       $table->integer('id_Doctor')->unique();
            $table->integer('cedula');
            $table->string('name');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('email');
            $table->string('password');
    
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
        Schema::drop('doctors');
    }
}
