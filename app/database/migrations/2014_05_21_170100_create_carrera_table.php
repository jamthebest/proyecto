<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarreraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('proyectodb.carrera', function($table){
	       $table->create();
	       $table->increments('id');
	       $table->string('codigo',10);
	       $table->string('nombre',128);
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
		Schema::drop('carrera');
	}

}
