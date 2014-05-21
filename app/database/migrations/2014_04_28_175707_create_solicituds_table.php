<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSolicitudsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Solicituds', function(Blueprint $table) {
			$table->increments('id');
			$table->int('id');
			$table->string('Descripcion');
			$table->int('Procesada');
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
		Schema::drop('Solicituds');
	}

}
