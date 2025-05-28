<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cupom;

class CupomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cupons = Cupom::all();
        return view('cupons.index', compact('cupons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cupons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string|max:50|unique:cupons,codigo',
            'desconto' => 'required|numeric|min:0',
            'validade' => 'required|date',
            'valor_minimo' => 'required|numeric|min:0',
        ]);
        Cupom::create($request->only(['codigo', 'desconto', 'validade', 'valor_minimo']));
        return redirect()->route('cupons.index')->with('success', 'Cupom cadastrado com sucesso!');
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
        $cupom = Cupom::findOrFail($id);
        return view('cupons.edit', compact('cupom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cupom = Cupom::findOrFail($id);
        $request->validate([
            'codigo' => 'required|string|max:50|unique:cupons,codigo,' . $cupom->id,
            'desconto' => 'required|numeric|min:0',
            'validade' => 'required|date',
            'valor_minimo' => 'required|numeric|min:0',
        ]);
        $cupom->update($request->only(['codigo', 'desconto', 'validade', 'valor_minimo']));
        return redirect()->route('cupons.index')->with('success', 'Cupom atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cupom = Cupom::findOrFail($id);
        $cupom->delete();
        return redirect()->route('cupons.index')->with('success', 'Cupom removido com sucesso!');
    }
}
