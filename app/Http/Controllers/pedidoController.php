<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Pedidoproduto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class pedidoController extends Controller
{
	protected $pedido = null, $pedidoproduto = null;
	
	public function __construct(Pedido $pedido, Pedidoproduto $pedidoproduto){
		$this->pedido=$pedido;
		$this->pedidoproduto=$pedidoproduto;
	}
	
	public function show($id)
    {
		try{
			// $pedidos= Pedido::findOrFail($id);
			$pedidos = DB::table('pedidos')
				  ->join('pedido_produto', 'pedido_produto.id_pedido', '=','pedidos.id_pedido')
				  ->join('users', 'pedidos.id_usuario', '=','users.id')
				  ->join('produtos', 'pedido_produto.id_produto', '=', 'produtos.id_produto')
				  ->where('id_usuario', '=', 5)
				  ->select('pedidos.id_pedido','status', 'users.email', 'users.id', 'pedidos.valor_total', 'pedido_produto.id_produto', 'pedido_produto.quantidade', 'produtos.nome', 'produtos.quantidade', 'produtos.valor') 
				  ->get();
            return view('pages.admin.showpedido', compact(['pedidos']));
        }catch(\Exception $e){
            session()->flash('error-message', 'Não foi possivel localizar produtos cadastrados');
            return redirect()->route('pages.admin.pedidocontrole');
        }
    }

	public function index(){
		// $pedidos= Pedido::orderBy('id_pedido')->get();
		$pedidos = DB::table('pedidos')
				  ->join('pedido_produto', 'pedido_produto.id_pedido', '=','pedidos.id_pedido')
				  ->join('users', 'pedidos.id_usuario', '=','users.id')
				  ->join('produtos', 'pedido_produto.id_produto', '=', 'produtos.id_produto')
				  ->where('id_usuario', '>', 0)
				  ->select('pedidos.id_pedido','status', 'users.email', 'users.id', 'pedido_produto.id_produto', 'pedido_produto.quantidade', 'produtos.nome', 'produtos.quantidade', 'produtos.valor') 
				  ->get();
				  
        return view('pages.admin.pedidocontrole', compact(['pedidos']));
	
	
	}
	public function meuspedidos(){
		$pedidos = DB::table('pedidos')
				  ->join('pedido_produto', 'pedido_produto.id_pedido', '=','pedidos.id_pedido')
				  ->join('users', 'pedidos.id_usuario', '=','users.id')
				  ->join('produtos', 'pedido_produto.id_produto', '=', 'produtos.id_produto')
				  ->where('id_usuario', '>', Auth::user()->id)
				  ->select('pedidos.id_pedido','status', 'users.email', 'users.id', 'pedido_produto.id_produto', 'pedido_produto.quantidade', 'produtos.nome', 'produtos.quantidade', 'produtos.valor') 
				  ->get();
				  
        return view('pages.admin.pedidocontrole', compact(['pedidos']));

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
