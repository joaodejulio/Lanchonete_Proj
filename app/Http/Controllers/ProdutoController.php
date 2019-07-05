<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos= Produto::orderBy('id_produto')->get();
        return view('pages.admin.editacardapio', compact(['produtos']));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = new Produto();
        return view('pages.admin.create', compact(['produtos']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome'=> 'required',
            'descricao'=> 'required',
            'valor'=> 'required',
            'img'=> 'image|nullable|max:1999'
        ]);
        //upload de arquivo
        if($request->hasFile('img')){
            //pegar o nome do arquivo com a extensao
            $filenameWithExt = $request->file('img')->path();
            //pegar so o nome do arquivo
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //so a extensao 
            $extension = $request->file('img')->extension();
            //nome do arquivo para salvar
            $fileNameToStore= $filename .'_'. time() .'.'. $extension;
            //upload da imagem
            $request->file('img')->storeAs('public/images/', $fileNameToStore);


        }
        else {
            $fileNameToStore = 'semfoto.jpg';
        }
        try{
            $p = new Produto();
            $p->nome = $request->nome;
            $p->descricao = $request->descricao;
            $p->valor = $request->valor;
            $p->img = $fileNameToStore;
            $p->saveOrFail();
            return redirect()->route('admin.cardapio');

        }catch(Exception $e){
            return redirect()->back()->withInput();
        }

        // try{
        //     $p = new Produto();
        //     $p->nome = $request->nome;
        //     $p->descricao = $request->descricao;
        //     $p->valor = $request->valor;
        //     $c->saveOrFail();

        //     session()->flash('success-message', 'Endereço cadastrado.');
        //     return redirect()->route('pages.endereco.index');
        // }catch(\Exception $e ){
        //     session()->flash('error-message', 'Não foi possivel inserir produto.');
        //     return redirect()->back()->withInput();
        // }
    }

    /**
     * Display the specified resource.
     * @param  \App\Model\Produto $produto
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $produtos = Produto::findOrFail($id);
            return view('pages.admin.show', compact(['produtos']));
        }catch(\Exception $e){
            session()->flash('error-message', 'Não foi possivel localizar produtos cadastrados');
            return redirect()->route('pages.admin.editacardapio');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param  \App\Model\Produto $produtos
     */
    public function edit($id)
    {
        try{
            $produtos = Produto::findOrFail($id);
            return view('pages.admin.edit', compact(['produtos']));
        }catch(\Exception $e){
            session()->flash('error-message', 'Não foi possivel localizar o produto solicitado');
            return redirect()->route('pages.endereco.index');

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        try{
            $produtos->id_produto = $request->id_produto;
            $produtos = Produto::findOrFail($produtos->id_produto);
            $produtos->nome = $request->nome;
            $produtos->descricao = $request->descricao;
            $produtos->valor = $request->valor;
            $produtos->quantidade = $request->quantidade;
            $produtos->img = $request->img;

            session()->flash('success-message', 'Dados do produto atualizados');
            return redirect()->route('pages.admin.editacardapio');    
        }catch(\Exception $e){
            $request->session()->flash('error-message','Não foi possivel alterar os dados do produto');
            return redirect()->back()->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param  \App\Model\Produto $produto
     * @param  \Illuminate\Http\Request  $x
     */
    public function destroy($id)
    {
        try{
            $produto = Produto::findOrFail($id);
            $produto->delete();

            // $request->session()->flash('success-message', 'produto removido com sucesso.');
            return redirect()->route('admin.cardapio');
        }catch(\Exception $e){
            // $request->session()->flash('error-message', 'Não foi posivel remover o produto');
            return redirect()->route('admin.cardapio');
        }
    }
}
