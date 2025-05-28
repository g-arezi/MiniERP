@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Cupom</h1>
    <form action="{{ route('cupons.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" required>
        </div>
        <div class="mb-3">
            <label for="desconto" class="form-label">Desconto</label>
            <input type="number" step="0.01" class="form-control" id="desconto" name="desconto" required>
        </div>
        <div class="mb-3">
            <label for="validade" class="form-label">Validade</label>
            <input type="date" class="form-control" id="validade" name="validade" required>
        </div>
        <div class="mb-3">
            <label for="valor_minimo" class="form-label">Valor Mínimo</label>
            <input type="number" step="0.01" class="form-control" id="valor_minimo" name="valor_minimo" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('cupons.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
