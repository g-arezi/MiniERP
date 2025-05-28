@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Estoque</h1>
    <form action="{{ route('estoque.update', $estoque->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="produto_id" class="form-label">Produto</label>
            <select class="form-control" id="produto_id" name="produto_id" required>
                @foreach($produtos as $produto)
                    <option value="{{ $produto->id }}" @if($estoque->produto_id == $produto->id) selected @endif>{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="variacao" class="form-label">Variação</label>
            <input type="text" class="form-control" id="variacao" name="variacao" value="{{ $estoque->variacao }}">
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ $estoque->quantidade }}" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('estoque.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
