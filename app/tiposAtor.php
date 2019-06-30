<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposAtor extends Model
{
    protected $table= 'tipos_ator';
    protected $primaryKey = 'id_tipo_ator';
    protected $fillable= ['descricao'];
    public $timestamps = true;


    // public function clientes(){
    //     return $this->belongsToMany('App\Usuario', 'descricao', )
    // }
}
