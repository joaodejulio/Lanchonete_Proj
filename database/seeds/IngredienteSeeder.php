<?php

use Illuminate\Database\Seeder;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredientes')->insert([
            'descricao' => 'Pao',
            'valor_unitario' => 0.10,
            'valor_adicional' => 0.50,
        ]);
        DB::table('ingredientes')->insert([
            'descricao' => 'Hamburger',
            'valor_unitario' => 0.70,
            'valor_adicional' => 1.5,
        ]);
        DB::table('ingredientes')->insert([
            'descricao' => 'Queijo',
            'valor_unitario' => 0.30,
            'valor_adicional' => 2.0,
        ]);
        DB::table('ingredientes')->insert([
            'descricao' => 'Alface',
            'valor_unitario' => 0.10,
            'valor_adicional' => 0.25,
        ]);
    }
}
