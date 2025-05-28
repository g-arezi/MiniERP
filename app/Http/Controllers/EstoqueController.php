<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estoque;
use App\Models\Produto;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estoques = Estoque::with('produto')->get();
        return view('estoque.index', compact('estoques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produtos = Produto::all();
        return view('estoque.create', compact('produtos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'variacao' => 'nullable|string|max:255',
            'quantidade' => 'required|integer|min:0',
        ]);
        Estoque::create($request->only(['produto_id', 'variacao', 'quantidade']));
        return redirect()->route('estoque.index')->with('success', 'Estoque cadastrado com sucesso!');
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
        $estoque = Estoque::findOrFail($id);
        $produtos = Produto::all();
        return view('estoque.edit', compact('estoque', 'produtos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'variacao' => 'nullable|string|max:255',
            'quantidade' => 'required|integer|min:0',
        ]);
        $estoque = Estoque::findOrFail($id);
        $estoque->update($request->only(['produto_id', 'variacao', 'quantidade']));
        return redirect()->route('estoque.index')->with('success', 'Estoque atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estoque = Estoque::findOrFail($id);
        $estoque->delete();
        return redirect()->route('estoque.index')->with('success', 'Estoque removido com sucesso!');
    }
}
