<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enderecos= Endereco::orderBy('cidade')->get();
        return view('pages.endereco.index', compact(['enderecos']));
        // $enderecos= Endereco::all();
        // return view('pages.endereco.index')->with('endereco', $enderecos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $endereco = new Endereco();
        return view('pages.endereco.create', compact(['endereco']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $e = new Endereco();
            $e->cidade = $request->cidade;
            $e->estado = $request->estado;
            $c->saveOrFail();

            session()->flash('success-message', 'Endereço cadastrado.');
            return redirect()->route('pages.endereco.index');
        }catch(\Exception $e ){
            session()->flash('error-message', 'Não foi possivel inserir endereço.');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Endereco $endereco
     * @return \Illuminate\Http\Response
     */
    public function show($id_endereco)
    {
        try{
            $endereco = Endereco::findOrFail($id_endereco);
            return view('pages.endereco.show', compact(['endereco']));
        }catch(\Exception $e){
            session()->flash('error-message', 'Não foi possivel localizar endereços cadastrados');
            return redirect()->route('pages.endereco.index');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Endereco $endereco
     * @return \Illuminate\Http\Response
     */
    public function edit($id_endereco){
        try{
            $endereco = Endereco::findOrFail($id_endereco);
            return view('pages.endereco.edit', compact(['endereco']));
        }catch(\Exception $e){
            session()->flash('error-message', 'Não foi possivel localizar o endereco solicitado');
            return redirect()->route('pages.endereco.index');

        }

    }
// @param  int  $id
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_endereco)
    {
        try{
            $endereco = Endereco::findOrFail($id_endereco);
            $endereco->cidade = $request->cidade;
            $endereco->estado = $request->estado;
            $endereco->cep = $request->cep;

            session()->flash('success-message', 'Dados da cidade atualizados');
            return redirect()->route('pages.endereco.index');    
        }catch(\Exception $e){
            $request->session()->flash('error-message','Não foi possivel alterar os dados da cidade');
            return redirect()->back()->withInput();
        }

    }
// @param  int  $id
    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Endereco $endereco
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_endereco)
    {
        try{
            $endereco = Endereco::findOrFail($id_endereco);
            $endereco->delete();

            $request->session()->flash('success-message', 'Endereco removido com sucesso.');
            return redirect()->route('pages.endereco.index');
        }catch(\Exception $e){
            $request->session()->flash('error-message', 'Não foi posivel removel cidade');
            return redirect()->route('pages.endereco.index');
        }
    }
}
