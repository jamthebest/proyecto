<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarrerasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Carreras', function(Blueprint $table) {
			$table->increments('id');
			$table->int('id');
			$table->string('Codigo');
			$table->string('Nombre');
			$table->string('Descripcion');
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
		Schema::drop('Carreras');
	}

}
