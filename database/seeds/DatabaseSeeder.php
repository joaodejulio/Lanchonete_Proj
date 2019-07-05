<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
        
        $this->call(tiposAtorSeeder::class);
        $this->call(EnderecoSeeder::class);
        $this->call(statusPedidoSeeder::class);
        $this->call(tiposAtorSeeder::class);
        $this->call(PessoaSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(PedidoSeeder::class);
        $this->call(pedidoProdutoSeeder::class);
    }
}
