<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectodb.asignatura', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id');
			$table->string('codigo');
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
		Schema::drop('Asignaturas');
	}

}
