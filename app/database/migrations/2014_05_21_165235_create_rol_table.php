<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rol', function($table){
	       $table->create();
	       $table->increments('id',11);
	       $table->string('nombre',45);
	       $table->string('descripcion',256);
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
		Schema::drop('rol');
	}

}
