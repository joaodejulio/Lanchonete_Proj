<?php

use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->insert([
            'id_status_pedido' =>2,
            'valor_pago' =>8.5,
            'valor_total' => 8.5,
            'pago'=> true,
            'id_usuario' => 2,
            'id_produto' => 1 
        ]);
    }
}
