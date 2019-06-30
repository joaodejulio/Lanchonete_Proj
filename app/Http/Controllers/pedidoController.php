<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Pedidoproduto;
use Illuminate\Support\Facades\Input;


class pedidoController extends Controller
{
	public function index(){
        return view('pages.pedido');
    }

    protected $pedido = null, $pedidoproduto = null;
    
    public function __construct(Pedido $pedido, Pedidoproduto $pedidoproduto){
        $this->pedido=$pedido;
        $this->pedidoproduto=$pedidoproduto;
    }

    public function atualizatabela($status){
    	$pedido = $this->pedido->getPedidobystatus($status);
    	foreach ($pedido as $key => $value) {
    		$produtos = $this->pedidoproduto->getProdutobypedidoid($value['id_pedido']);
    		$pedido[$key]['produtos']='';
    		foreach ($produtos as $produto_key => $produto) {
    			$pedido[$key]['produtos'].='<br>Produto '. $produto['nome'].' Qtd '.$produto['quantidade'];
    		}
    		$pedido[$key]['botao']=$value['status'] == '2' ? '' : '<button class="btn-alterar-status" data-id="' . $value['id_pedido'] . '">Alterar Status</button>';
    		
    	}
   		return $pedido;
    }

    public function atualizaStatus(){
    	$input = Input::All();
    	print_r($this->pedido->updateProduto($input,$input['id_pedido']));
    }
    
}
