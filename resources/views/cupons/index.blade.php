@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cupons</h1>
    <a href="{{ route('cupons.create') }}" class="btn btn-primary mb-3">Novo Cupom</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Desconto</th>
                <th>Validade</th>
                <th>Valor Mínimo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cupons as $cupom)
            <tr>
                <td>{{ $cupom->id }}</td>
                <td>{{ $cupom->codigo }}</td>
                <td>R$ {{ number_format($cupom->desconto, 2, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($cupom->validade)->format('d/m/Y') }}</td>
                <td>R$ {{ number_format($cupom->valor_minimo, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('cupons.edit', $cupom->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('cupons.destroy', $cupom->id) }}" method="POST" style="display:inline-block">
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
