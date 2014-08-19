<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('proyectodb.usuario', function($table){
	       $table->create();
	       $table->increments('id');
	       $table->string('user');
	       $table->string('email');
	       $table->string('password');
	       $table->string('tipo');
	       $table->integer('activo');
	       $table->string('remember_token');
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
		Schema::drop('proyectodb.usuario');
	}

}
