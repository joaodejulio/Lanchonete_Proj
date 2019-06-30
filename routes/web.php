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

Route::get('/atualizatabelapedidos/{id}', 'pedidoController@atualizatabela');//aqui chama o controller que vai chamar a view do cardapio
Route::get('/atualizaStatus', 'pedidoController@atualizaStatus');//aqui chama o controller que vai chamar a view do cardapio
Route::resource('caixa', 'caixaController');//aqui chama o controller que vai chamar a view do caixa

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cardapio', 'cardapioController@Index');//aqui chama o controller que vai chamar a view do cardapio
Route::get('/faleconosco', 'PagesController@faleconosco');//aqui chama o controller que vai chamar a view do fale conosco
Route::get('/conta', 'PagesController@conta');//aqui chama o controller que vai chamar a view do fale conosco
Route::get('/carrinho', 'PagesController@carrinho');//aqui chama o controller que vai chamar a view do fale conosco
Route::get('/politicasprivacidade', 'PagesController@politicas');//aqui chama o controller que vai chamar a view do fale conosco


Route::resource('endereco', 'EnderecoController');
Route::resource('ingrediente', 'IngredienteController');
Route::get('/pedido', 'pedidoController@Index');//aqui chama o controller que vai chamar a view do cardapio
Route::resource('pessoa', 'PessoaController');
Route::resource('produto', 'ProdutoController');
Route::resource('statusPedido', 'statusPedidoController');
Route::resource('tiposAtores', 'tiposAtoresController');
Route::resource('usuario', 'UsuarioController');

Route::get('/endereco', 'EnderecoController@index')->name('endereco.index');
Route::get('/endereco/create', 'EnderecoController@create')->name('endereco.create');
Route::get('/endereco/{id_endereco}/show', 'EnderecoController@show')->name('endereco.show');
Route::get('/endereco/{id_endereco}/edit', 'EnderecoController@edit')->name('endereco.edit');
Route::post('/endereco/store', 'EnderecoController@store')->name('endereco.store');
Route::put('/endereco/{id_endereco}', 'EnderecoController@update')->name('endereco.update');
Route::delete('/endereco/{id_enderecp}', 'EnderecoController@destroy')->name('endereco.destroy');

