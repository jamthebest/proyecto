<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('proyectodb.datos', function($table){
	       $table->create();
	       $table->increments('id');
	       $table->string('nombre',256);
	       $table->string('empresa',128);
	       $table->string('cargo',128);
	       $table->string('telefono',15);
	       $table->integer('user');
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
		Schema::drop('datos');
	}

}
