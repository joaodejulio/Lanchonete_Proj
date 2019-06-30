<?php

use Illuminate\Database\Seeder;

class statusPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_pedidos')->insert([
            'descricao' => 'Em andamento'
        ]);
        
        DB::table('status_pedidos')->insert([
            'descricao' => 'Pronto'
        ]);
        DB::table('status_pedidos')->insert([
            'descricao' => 'Entregue'
        ]);
    }
}
