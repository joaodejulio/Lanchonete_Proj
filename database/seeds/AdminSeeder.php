<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'email' =>  'admin@xtudo',
            'password' => Hash::make('12345')
        ]);
    }
}
