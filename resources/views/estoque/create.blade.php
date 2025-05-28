@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Estoque</h1>
    <form action="{{ route('estoque.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="produto_id" class="form-label">Produto</label>
            <select class="form-control" id="produto_id" name="produto_id" required>
                <option value="">Selecione</option>
                @foreach($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="variacao" class="form-label">Variação</label>
            <input type="text" class="form-control" id="variacao" name="variacao">
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('estoque.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
