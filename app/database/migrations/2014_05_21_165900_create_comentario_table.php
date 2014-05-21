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
		Schema::table('comentario', function($table){
	       $table->create();
	       $table->increments('id',11);
	       $table->integer('user',11);
	       $table->string('descripcion',256);
	       $table->integer('leido',11);
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
		Schema::drop('comentario');
	}

}
