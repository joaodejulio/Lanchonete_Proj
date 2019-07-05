<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    protected $table = 'produtos';

    const CREATED_AT 		= 'data_adicionado';
	const UPDATED_AT 		= 'data_atualizado';
    protected $primaryKey  	= 'id_produto';

    protected $fillable = [
        'nome','valor', 'quantidade', 'descricao'
    ];

    public function getAll(){
    	$produto = self::all();
    	return $produto;
    }

    public function saveProduto($input){
        $produto= new Produto();
        $produto->fill($input);
        $produto->save();
        return $produto;
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
}
