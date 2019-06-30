<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id_produto';
    protected $fillable = ['nome', 'id_ingrediente', 'valor_final'];
    public $timestamps = true;
}
