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
            'nome' =>'X-Burguer',
            'valor' => 8.50,
            'quantidade'=> 2, 
            'descricao'=> 'Pão, 200g de Hamburguer Bovino, queijo, tomate', 
            'img'=> '1.jpg', 
        ]);
        DB::table('produtos')->insert([
            'nome' =>'X-Salada',
            'valor' => 8.50,
            'quantidade'=> 2, 
            'descricao'=> 'Pão, 200g de Hamburguer Bovino, queijo, presunto, alface, tomate', 
            'img'=> '2.jpg', 
        ]);

        DB::table('produtos')->insert([
            'nome' =>'X-Calabresa',
            'valor' => 9.50,
            'quantidade'=> 3, 
            'descricao'=> 'Pão, 200g de Hamburguer Bovino, queijo, calabresa, alface, tomate, cheddar e catupiry', 
            'img'=> '3.jpg', 
        ]);
        DB::table('produtos')->insert([
            'nome' =>'Galiburguer',
            'valor' => 10.50,
            'quantidade'=> 4, 
            'descricao'=> 'Pão, 200g de Hamburguer Bovino, frango desfiado, queijo, calabresa, alface, tomate, Catupiry', 
            'img'=> '4.jpg', 
        ]);
        DB::table('produtos')->insert([
            'nome' =>'X-Tudo',
            'valor' => 15.50,
            'quantidade'=> 4, 
            'descricao'=> 'Pão, 200g de Hamburguer Bovino, frango desfiado, queijo, presunto, calabresa, ovo, alface, tomate, cheedar e catupiry', 
            'img'=> '5.jpg', 
        ]);
    }
}
