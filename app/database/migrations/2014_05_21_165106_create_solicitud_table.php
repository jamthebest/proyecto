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
		Schema::table('proyectodb.solicitud', function($table){
	       $table->create();
	       $table->increments('id');
	       $table->integer('user');
	       $table->integer('area_geografica');
	       $table->integer('tipo_institucion');
	       $table->integer('area_especializacion');
	       $table->integer('area_subespecializacion');
	       $table->string('tema',128);
	       $table->string('descripcion',256);
	       $table->integer('procesada');
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
		Schema::drop('proyectodb.solicitud');
	}

}
