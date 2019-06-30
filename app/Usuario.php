<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = ['id_pessoa','id_ator', 'login', 'senha'];
    public $timestamps = true;
}
