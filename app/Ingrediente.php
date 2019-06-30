<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';
    protected $primaryKey = 'id_ingrediente';
    protected $fillable = ['descricao','valor_unitario','calor_adicional'];
    public $timestamps = true;
}