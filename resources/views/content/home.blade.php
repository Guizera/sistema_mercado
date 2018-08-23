@extends('layouts.principal')

@section('conteudo')
<div id="wrapper" class="toggled">
@include('layouts.menu')
<div id="page-content">
    <div class="container-fluid">
        <h2>Nossos Clientes</h2>
        <table class="table table-bordered">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Endereço</th>
                <th>Atualizar</th>
                <th>Deletar</th>
            </tr>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nome_cliente }}</td>
                <td>{{ $cliente->email_cliente }}</td>
                <td>{{ $cliente->celular_cliente }}</td>
                <td>{{ $cliente->endereco_cliente }}</td>
                <td>
                    <a href="{{ url('/editar', $cliente->id) }}" class="btn btn-places">Editar</a>
                </td>
                <td>
                    <form action="{{ action('BevicredController@destroy', $cliente->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</div>
@endsection
