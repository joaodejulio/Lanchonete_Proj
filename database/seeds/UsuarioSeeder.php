<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' =>  'admin@xtudo',
            'password' => 'admin'
        ]);
        
        DB::table('users')->insert([
            'email' =>  'cliente@xtudo',
            'password' => 'cliente'
        ]);

        DB::table('users')->insert([
            'email' =>  'cozinheiro@xtudo',
            'password' => 'cozinheiro'
        ]);
    }
}
