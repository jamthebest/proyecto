<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Datos', function(Blueprint $table) {
			$table->increments('id');
			$table->int('id');
			$table->string('Nombre');
			$table->string('Empresa');
			$table->string('Cargo');
			$table->string('Telefono');
			$table->int('user');
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
		Schema::drop('Datos');
	}

}
