<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Pedidoproduto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::user()){
            $usuarios = DB::table('users')
            ->where('id', '=', Auth::user()->id)
            ->select('id','email') 
            ->get();
            return view('pages.caixa',compact('produtos','usuarios'));

        }else{return redirect('/login');}
    }
    public function store()
    {
    	$input=Input::all();
    	$pedido = array('id_pedido' => NULL ,'id_usuario' => Auth::user()->id,'valor_total' => $input['valor_total'],  'status' => 1, 'created_at'=>NULL, 'updated_at'=>NULL);
           
        $pedido_retorno = $this->pedido->savePedido($pedido);
           
           $pedido_materiais;
       	foreach ($input['produto_id'] as $key => $value) {
       		$pedido_materiais=array('id_pedido' => $pedido_retorno['id_pedido'], 'quantidade' => $input['quantidade'][$key],'id_produto' => $value);
       		 $this->pedidoproduto->savePedidoproduto($pedido_materiais);

       	}
       	return redirect('caixa');
    }
}