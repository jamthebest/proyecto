<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('proyectodb.mensaje', function($table){
	       $table->create();
	       $table->increments('id');
	       $table->string('codigo',20);
	       $table->string('descripcion',256);
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
		Schema::drop('mensaje');
	}

}
