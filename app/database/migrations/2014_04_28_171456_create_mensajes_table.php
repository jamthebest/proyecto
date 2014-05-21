<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMensajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Mensajes', function(Blueprint $table) {
			$table->increments('id');
			$table->int('id');
			$table->string('Codigo');
			$table->text('Descripcion');
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
		Schema::drop('Mensajes');
	}

}
