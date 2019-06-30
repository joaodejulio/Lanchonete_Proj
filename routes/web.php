<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
---------------------------------Exemplos---------------------------------




Route::get('/about', function () {
    return view('pages.about');
   
});

Route::get('/padrao', function () {
    return view('pages.padrao');
   
});

Route::get('/', function () {
    return view('welcome');
   
});
assim faz rota dinamica pegando oq vier na barra de endereco
Route::get('/users/{id}', function ($id) {
    return 'this is user: ' .$id;
    return 'the user whith this id : '.$id. 'callled: ' .$name;

   
});
--------------------------------------------------------------------------
*/
Auth::routes();

Route::get('/', 'PagesController@index');//aqui chama o controller que vai chamar a view da pagina principal
Route::get('/cardapio', 'cardapioController@Index');//aqui chama o controller que vai chamar a view do cardapio
Route::get('/atualizatabelapedidos/{id}', 'pedidoController@atualizatabela');//aqui chama o controller que vai chamar a view do cardapio
Route::get('/pedido', 'pedidoController@Index');//aqui chama o controller que vai chamar a view do cardapio
Route::get('/atualizaStatus', 'pedidoController@atualizaStatus');//aqui chama o controller que vai chamar a view do cardapio
Route::resource('caixa', 'caixaController');//aqui chama o controller que vai chamar a view do caixa




Route::get('/home', 'HomeController@index')->name('home');
