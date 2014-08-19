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
	       $table->string('nombre');
	       $table->string('empresa');
	       $table->string('cargo');
	       $table->string('telefono');
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
		Schema::drop('proyectodb.datos');
	}

}
