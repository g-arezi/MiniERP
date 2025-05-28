@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Pedido</h1>
    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="cliente_nome" class="form-label">Nome do Cliente</label>
            <input type="text" class="form-control" id="cliente_nome" name="cliente_nome" value="{{ $pedido->cliente_nome }}" required>
        </div>
        <div class="mb-3">
            <label for="cliente_email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="cliente_email" name="cliente_email" value="{{ $pedido->cliente_email }}" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $pedido->endereco }}" required>
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" value="{{ $pedido->cep }}" required>
        </div>
        <div class="mb-3">
            <label for="subtotal" class="form-label">Subtotal</label>
            <input type="number" step="0.01" class="form-control" id="subtotal" name="subtotal" value="{{ $pedido->subtotal }}" required>
        </div>
        <div class="mb-3">
            <label for="frete" class="form-label">Frete</label>
            <input type="number" step="0.01" class="form-control" id="frete" name="frete" value="{{ $pedido->frete }}" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" step="0.01" class="form-control" id="total" name="total" value="{{ $pedido->total }}" required>
        </div>
        <div class="mb-3">
            <label for="cupom_id" class="form-label">Cupom</label>
            <select class="form-control" id="cupom_id" name="cupom_id">
                <option value="">Nenhum</option>
                @foreach($cupons as $cupom)
                    <option value="{{ $cupom->id }}" @if($pedido->cupom_id == $cupom->id) selected @endif>{{ $cupom->codigo }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $pedido->status }}">
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
