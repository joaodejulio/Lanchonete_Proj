@extends('pages.layouts.padrao')

@section('content')

<div class="row pb-4">
    <span class="display-4">Listagem de Cidades</span>
</div>

<div class="row">
    <a href="{{ route('endereco.create') }}" class="btn btn-success">Novo endereco</a>
</div>

<div class="row pt-2">
    <table class="table table-striped">
        <thead>
            <tr>
                <td scope="col">Cidade</td>
                <td scope="col">Estado</td>
                <td scope="col">CEP</td>
                <td scope="col" colspan="2">Opções</td>
            </tr>
        </thead>
        <tbody>
            @foreach($enderecos as $endereco)
                <tr>
                    <td><a href="{{ route('endereco.show', $endereco->id_endereco) }}">{{ $endereco->cidade }}</a></td>
                    <td>{{ $endereco->estado }}</td>
                    <td>{{ $endereco->cep }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('endereco.edit', $endereco->id_endereco) }}">Alterar</a>
                    </td>
                    <td>
                        <form action="{{ route('endereco.destroy', $endereco->id_endereco) }}" method="post">
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