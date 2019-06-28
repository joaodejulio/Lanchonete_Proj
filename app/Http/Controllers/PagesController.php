<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function cardapio(){
        return view('pages.cardapio');
    }
    public function faleconosco(){
        return view('pages.faleconosco');
    }
    public function conta(){
        return view('pages.conta');
    }
    public function carrinho(){
        return view('pages.carrinho');
    }
}