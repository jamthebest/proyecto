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
	       $table->integer('destinatario');
	       $table->integer('user');
	       $table->string('asunto', 64);
	       $table->string('descripcion', 256);
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
		Schema::drop('proyectodb.mensaje');
	}

}
