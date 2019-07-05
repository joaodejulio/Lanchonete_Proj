<?php

use Illuminate\Database\Seeder;

class pedidoProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedido_produto')->insert([
            'id_produto' => 2,
            'id_pedido' => 1,
            'quantidade' =>2,
        ]);
        DB::table('pedido_produto')->insert([
            'id_produto' => 1,
            'id_pedido' => 1,
            'quantidade' =>1,
        ]);
    }
}
