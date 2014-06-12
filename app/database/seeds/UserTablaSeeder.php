<?php
class UserTableSeeder extends Seeder{
    public function run(){
        DB::table('proyectodb.usuario')->delete();

        Usuario::create(array(
            'id' => '1',
            'user' => 'jam',
            'email' => 'javmidence@yahoo.es',
            'password' => Hash::make('JamM221'),
            'tipo' => 'Administrador',
            'activo' => '1'
        ));

    }
}