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
            'id_usuario' => 2,
            'valor_total' => 8.5,
            'status' =>2,
        ]);
        DB::table('pedidos')->insert([
            'id_usuario' => 2,
            'valor_total' => 25.0,
            'status' => 4
        ]);
    }
}
