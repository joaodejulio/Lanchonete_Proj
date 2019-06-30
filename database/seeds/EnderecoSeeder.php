<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enderecos')->insert([
            // 'cidade' => Str::random(5),
            'cidade' => 'Ponta Grossa',
            'estado' => 'Parana',
            'cep' =>rand(11111111, 99999999)
        ]);
    }
}
