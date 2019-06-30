<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    protected $primaryKey = 'id_endereco';
    protected $fillable = ['cidade','estado','cep'];
    protected $visible = ['cidade', 'estado', 'cep'];
    public $timestamps = true;

}
