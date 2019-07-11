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
*/

Route::group(['middleware' => 'admin'], function () {
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/admin', 'AdminController@index' )->name('admin');
        Route::get('/editacardapio', 'ProdutoController@index' )->name('admin.cardapio');
        Route::get('/pedidocontrole', 'PedidoController@index')->name('pedidocontrole');

    });
    
   
    Route::get('/admin/login', 'AdminController@login' )->name('admin.login');
    Route::post('/admin/login', 'AdminController@postlogin' );
    Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');

    
    Route::get('/editacardapio/create', 'ProdutoController@create')->name('editacardapio.create');
    Route::get('/editacardapio/{id_produto}/show', 'ProdutoController@show')->name('editacardapio.show');
    Route::get('/editacardapio/{id_produto}/edit', 'ProdutoController@edit')->name('editacardapio.edit');
    Route::put('/editacardapio/{id_produto}', 'ProdutoController@update')->name('editacardapio.update');
    
    Route::delete('/editacardapio/{id_produto}', 'ProdutoController@destroy')->name('editacardapio.destroy');
    
    Route::resource('produto', 'ProdutoController');

});

Route::group(['middleware' => 'web'], function () {
    
    Auth::routes();

    Route::get('/', 'PagesController@index');//aqui chama o controller que vai chamar a view da pagina principal

    Route::get('/atualizatabelapedidos/{id}', 'pedidoController@atualizatabela');//aqui chama o controller que vai chamar a view do cardapio
    Route::get('/atualizaStatus', 'pedidoController@atualizaStatus');//aqui chama o controller que vai chamar a view do cardapio
    Route::resource('caixa', 'caixaController')->middleware('web');//aqui chama o controller que vai chamar a view do caixa
    Route::resource('/meuspedidos', 'pedidoController@meuspedidos')->middleware('web');//aqui chama o controller que vai chamar a view do caixa

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/cardapio', 'cardapioController@Index');//aqui chama o controller que vai chamar a view do cardapio
    Route::get('/faleconosco', 'PagesController@faleconosco');//aqui chama o controller que vai chamar a view do fale conosco
    Route::get('/conta', 'PagesController@conta');//aqui chama o controller que vai chamar a view do fale conosco
    
    Route::get('/politicasprivacidade', 'PagesController@politicas');//aqui chama o controller que vai chamar a view do fale conosco

    
    Route::resource('pessoa', 'PessoaController');

    Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index')->middleware('web');
    Route::post('/carrinho/add', 'CarrinhoController@add')->name('carrinho.add');
    Route::get('/teste', 'PagesController@teste')->name('teste');


    Route::get('/home', 'HomeController@index')->name('home');

});