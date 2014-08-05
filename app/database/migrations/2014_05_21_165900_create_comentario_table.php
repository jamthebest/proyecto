<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('proyectodb.comentario', function($table){
	       $table->create();
	       $table->increments('id');
	       $table->integer('user');
	       $table->string('descripcion',256);
	       $table->integer('leido');
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
		Schema::drop('proyectodb.comentario');
	}

}
