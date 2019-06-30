<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Produto;
use App\User;
use App\Models\Pedidoproduto;
use Illuminate\Support\Facades\Input;

class caixaController extends Controller
{

	protected $pedido = null, $user = null, $produto = null;
    
    public function __construct(Pedido $pedido, User $user, Produto $produto, Pedidoproduto $pedidoproduto){
        $this->pedido=$pedido;
        $this->produto=$produto;
        $this->user=$user;
        $this->pedidoproduto=$pedidoproduto;
    }
    public function index(){
    	$produtos = $this->produto->getAll();
    	$users = $this->user->getAll();
        return view('pages.caixa',compact('produtos','users'));
    }
    public function store()
    {
    	$input=Input::all();
    	$pedido = array('id_user' => $input['usuario'],'valor_total' => $input['valor_total'],  'status' => 0 );
       	$pedido_retorno = $this->pedido->savePedido($pedido);
       	$pedido_materiais;
       	foreach ($input['produto_id'] as $key => $value) {
       		$pedido_materiais=array('id_pedido' => $pedido_retorno['id_pedido'], 'quantidade_produto' => $input['quantidade'][$key],'id_produto' => $value);
       		 $this->pedidoproduto->savePedidoproduto($pedido_materiais);

       	}
       	return redirect('caixa');
    }
}