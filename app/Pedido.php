<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';
    protected $fillable = ['id_status_pedido', 'id_usuario', 'id_produto', 'valor_total', 'valor_pago', 'pago'];
    public $timestamps = true;
}
