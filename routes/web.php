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

Route::get('/', 'PagesController@index');//aqui chama o controller que vai chamar a view da pagina principal
Route::get('/cardapio', 'PagesController@cardapio');//aqui chama o controller que vai chamar a view do cardapio
Route::get('/faleconosco', 'PagesController@faleconosco');//aqui chama o controller que vai chamar a view do fale conosco
Route::get('/conta', 'PagesController@conta');//aqui chama o controller que vai chamar a view do fale conosco
Route::get('/carrinho', 'PagesController@carrinho');//aqui chama o controller que vai chamar a view do fale conosco
