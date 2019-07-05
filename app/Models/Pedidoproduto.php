<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedidoproduto extends Model
{
	protected $table = 'pedido_produto';

    protected $primaryKey  	= 'id_pedido_produto';

    protected $fillable = [
        'id_produto','id_pedido','quantidade'
    ];
    public $timestamps = false;
    public function getAll(){
    	$produto = self::all();
    	return $produto;
    }

    public function savePedidoproduto($input){
        $pedidoproduto= new Pedidoproduto();
        $pedidoproduto->fill($input);
        $pedidoproduto->save();
        return $pedidoproduto;
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
    public function getProdutobypedidoid($pedidoid){
        $query = self::where('id_pedido','=',$pedidoid)->join('produto as p', 'p.id_produto','=','pedido_produto.id_produto')->select('p.nome','p.valor')->get();
        return $query;
    }

    public function produto (){
        return $this->belongsToMany(Produto::class);
    }

 
}
