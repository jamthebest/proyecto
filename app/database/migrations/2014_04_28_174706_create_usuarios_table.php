<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Usuarios', function(Blueprint $table) {
			$table->increments('id');
			$table->int('id');
			$table->string('user');
			$table->string('email');
			$table->string('pass');
			$table->int('Activo');
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
		Schema::drop('Usuarios');
	}

}
