<?php
use App\tiposAtor;
use Illuminate\Database\Seeder;

class tiposAtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_ator = array('Administrador', 'Cliente', 'Funcionario');
    
        foreach($arr_ator as $ator){
            $i = new tiposAtor();
            $i->descricao = $ator;
            $i->save();
        }
    }
}
