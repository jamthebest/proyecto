<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('solicitud', function($table){
	       $table->create();
	       $table->increments('id',11);
	       $table->integer('user',11);
	       $table->string('tema',128);
	       $table->string('descripcion',256);
	       $table->integer('procesada',11);
	       $table->string('remember_token');
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
		Schema::drop('solicitud');
	}

}
