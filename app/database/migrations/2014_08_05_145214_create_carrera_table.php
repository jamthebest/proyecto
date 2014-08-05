<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarreraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectodb.carrera', function(Blueprint $table) {
			$table->increments('id');
			$table->string('codigo');
			$table->string('grado');
			$table->string('nombre');
			$table->string('descripcion');
			$table->integer('activo');
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
		Schema::drop('proyectodb.carrera');
	}

}
