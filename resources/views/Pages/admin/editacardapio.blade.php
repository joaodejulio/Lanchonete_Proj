@extends('pages.admin.padrao')

@section('content')

<div class="row pb-4">
    <span class="display-4">Listagem de Produtos</span>
</div>


    <div class="row">
                <a href="{{ route('editacardapio.create') }}" class="btn btn-success">Novo produto</a>
    </div>


<div class="row pt-2">
    <table class="table table-striped">
        <thead>
            <tr>
                <td scope="col">Nome</td>
                <td scope="col">Descrição</td>
                <td scope="col">Valor</td>
                <td scope="col" colspan="2">Opções</td>
                
            </tr>
        </thead>
        <tbody>
            
            @foreach($produtos as $produto)
                <tr>
                    <td><a href="{{ route('editacardapio.show', $produto->id_produto) }}">{{ $produto->nome }}</a></td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->valor }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('editacardapio.edit', $produto->id_produto) }}">Alterar</a>
                    </td>
                    <td>
                        <form action="{{ route('editacardapio.destroy', $produto->id_produto) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection