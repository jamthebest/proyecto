<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('MensajesTableSeeder');
		$this->call('UsuariosTableSeeder');
		$this->call('DatosTableSeeder');
		$this->call('ComentariosTableSeeder');
		$this->call('SolicitudsTableSeeder');
		$this->call('RolsTableSeeder');
		$this->call('CarrerasTableSeeder');
	}

}