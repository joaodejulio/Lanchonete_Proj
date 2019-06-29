<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'id_pessoa' => 3,
            'id_ator' => 1,
            'login' =>  'admin',
            'senha' => 'admin'
        ]);
        
        DB::table('usuarios')->insert([
            'id_pessoa' => 4,
            'id_ator' => 2,
            'login' =>  'cliente',
            'senha' => 'cliente'
        ]);

        DB::table('usuarios')->insert([
            'id_pessoa' => 5,
            'id_ator' => 3,
            'login' =>  'cozinheiro',
            'senha' => 'cozinheiro'
        ]);
    }
}
