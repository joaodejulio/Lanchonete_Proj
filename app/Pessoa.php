<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';
    protected $primaryKey = 'id_pessoa';
    protected $fillable = ['id_endereco','nome','email', 'telefone', 'cpf', 'num_endereco', 'rua'];
    public $timestamps = true;

}
