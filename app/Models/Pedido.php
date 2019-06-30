<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	protected $table = 'pedido';

    protected $primaryKey  	= 'id_pedido';

    protected $fillable = [
        'id_user','valor_total','status'
    ];
    public $timestamps = false;
    public function getAll(){
    	$produto = self::all();
    	return $produto;
    }

    public function savePedido($input){
        $pedido= new Pedido();
        $pedido->fill($input);
        $pedido->save();
        return $pedido;
    }

    public function getProduto($id){
        $produto = self::find($id);
        if (is_null($produto)) {
            return false;
        }
        return $produto;
    }
    public function deleteProduto($id){
        $produto = self::find($id);
        if (is_null($produto)) {
            return false;
        }
        $produto->delete();
        return $produto;
    }
    public function updateProduto($input,$id){
        $produto = self::find($id);
        if (is_null($produto)) {
            return false;
        }
        $produto->fill($input);
        $produto->save();
        return $produto;

    }
    public function getPedidobystatus($status){
        $query = self::where('status','=',$status)->join('users as u', 'u.id','=','pedido.id_user')->select('id_pedido','u.name','status')->get();
        return $query;
    }
}
