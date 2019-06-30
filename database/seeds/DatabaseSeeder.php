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
        // $this->call(UsersTableSeeder::class);
        $this->call(tiposAtorSeeder::class);
        $this->call(EnderecoSeeder::class);
        $this->call(IngredientesSeeder::class);
        $this->call(PedidoSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(statusPedidoSeeder::class);
        $this->call(tiposAtorSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
