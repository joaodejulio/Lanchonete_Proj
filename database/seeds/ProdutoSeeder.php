<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'id_produto' =>1,
            'nome' =>'X-Salada',
            'id_ingrediente'=> 2, 
            'valor_final' => 8.50,
        ]);

        DB::table('produtos')->insert([
            'id_produto' =>1,
            'nome' =>'X-Salada',
            'id_ingrediente'=> 3, 
            'valor_final' => 8.50,
        ]);
        DB::table('produtos')->insert([
            'id_produto' =>1,
            'nome' =>'X-Salada',
            'id_ingrediente'=> 4, 
            'valor_final' => 8.50,
        ]);
    }
}
