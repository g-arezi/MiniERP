@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Estoque</h1>
    <a href="{{ route('estoque.create') }}" class="btn btn-primary mb-3">Novo Estoque</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Variação</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estoques as $estoque)
            <tr>
                <td>{{ $estoque->id }}</td>
                <td>{{ $estoque->produto->nome ?? '-' }}</td>
                <td>{{ $estoque->variacao }}</td>
                <td>{{ $estoque->quantidade }}</td>
                <td>
                    <a href="{{ route('estoque.edit', $estoque->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('estoque.destroy', $estoque->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
