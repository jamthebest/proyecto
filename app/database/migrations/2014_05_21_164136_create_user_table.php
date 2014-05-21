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
		Schema::table('usuario', function($table){
	       $table->create();
	       $table->increments('id');
	       $table->string('user',50);
	       $table->string('email',128);
	       $table->string('password',62);
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
		Schema::drop('usuario');
	}

}
