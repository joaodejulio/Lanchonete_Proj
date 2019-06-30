<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class cardapioController extends Controller
{
	protected $produto = null;
    
    public function __construct(Produto $produto){
        $this->produto=$produto;
    }
    public function index(){
		$produtos = $this->produto->getAll();
        return view('pages.cardapio',compact('produtos'));
    }

}
