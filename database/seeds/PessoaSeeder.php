<?php

use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->insert([
            'id_endereco' => 1,
            'nome' => 'admin',
            'email' =>  'admin@gmail.com',
            'telefone' => rand(421111111,429999999),
            'cpf' =>rand(11111111111, 99999999999),
            'num_endereco' =>rand(000, 999),
            'rua' =>'osSemrua'
        ]);
        DB::table('pessoas')->insert([
            'id_endereco' => 1,
            'nome' => 'cliente',
            'email' =>  'cliente@gmail.com',
            'telefone' => rand(421111111,429999999),
            'cpf' =>rand(11111111111, 99999999999),
            'num_endereco' =>rand(000, 999),
            'rua' =>'osSemrua'
        ]);
        DB::table('pessoas')->insert([
            'id_endereco' => 1,
            'nome' => 'cozinheiro',
            'email' =>  'cozinheiro@gmail.com',
            'telefone' => rand(421111111,429999999),
            'cpf' =>rand(11111111111, 99999999999),
            'num_endereco' =>rand(000, 999),
            'rua' =>'osSemrua'
        ]);
    }
}
