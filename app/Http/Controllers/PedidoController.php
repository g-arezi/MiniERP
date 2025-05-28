<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cupom;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::with('cupom')->get();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cupons = Cupom::all();
        return view('pedidos.create', compact('cupons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_nome' => 'required|string|max:255',
            'cliente_email' => 'required|email',
            'endereco' => 'required|string|max:255',
            'cep' => 'required|string|max:10',
            'subtotal' => 'required|numeric|min:0',
            'frete' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
            'cupom_id' => 'nullable|exists:cupons,id',
            'status' => 'nullable|string',
        ]);
        Pedido::create($request->only(['cliente_nome', 'cliente_email', 'endereco', 'cep', 'subtotal', 'frete', 'total', 'cupom_id', 'status']));
        return redirect()->route('pedidos.index')->with('success', 'Pedido cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        $cupons = Cupom::all();
        return view('pedidos.edit', compact('pedido', 'cupons'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $request->validate([
            'cliente_nome' => 'required|string|max:255',
            'cliente_email' => 'required|email',
            'endereco' => 'required|string|max:255',
            'cep' => 'required|string|max:10',
            'subtotal' => 'required|numeric|min:0',
            'frete' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
            'cupom_id' => 'nullable|exists:cupons,id',
            'status' => 'nullable|string',
        ]);
        $pedido->update($request->only(['cliente_nome', 'cliente_email', 'endereco', 'cep', 'subtotal', 'frete', 'total', 'cupom_id', 'status']));
        return redirect()->route('pedidos.index')->with('success', 'Pedido atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('success', 'Pedido removido com sucesso!');
    }
}
