<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statusPedido extends Model
{
    protected $table = 'status_pedidos';
    protected $primaryKey = 'id_status_pedidos';
    protected $fillable = ['descricao'];
    public $timestamps = true;
}
