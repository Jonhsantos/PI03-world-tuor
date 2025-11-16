<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pacote;

class PacoteController extends Controller
{
    // LISTAR
    public function index()
    {
        $pacotes = Pacote::all();
        return view('admin.pacotes.index', compact('pacotes'));
    }

    // FORM DE CRIAR
    public function create()
    {
        return view('admin.pacotes.create');
    }

    // SALVAR NO BANCO
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
            'duracao' => 'required|integer'
        ]);

        Pacote::create($request->all());

        return redirect()->route('pacotes.index')->with('success', 'Pacote criado com sucesso!');
    }

    // FORM DE EDITAR
    public function edit(Pacote $pacote)
    {
        return view('admin.pacotes.edit', compact('pacote'));
    }

    // ATUALIZAR
    public function update(Request $request, Pacote $pacote)
    {
        $request->validate([
    'nome' => 'required|min:3',
    'continente' => 'required|string',
    'pais' => 'required|string',
    'descricao' => 'nullable|string',
    'preco' => 'required|numeric|min:0',
    'data_inicio' => 'required|date',
    'data_fim' => 'required|date|after_or_equal:data_inicio',
]);

        $Pacote::create($request->all());
        return redirect()->route('pacotes.index')->with('success', 'Pacote criado com sucesso!');

        $pacote->update($request->all());
        return redirect()->route('pacotes.index')->with('success', 'Pacote atualizado com sucesso!');

    // EXCLUIR
    public function destroy(Pacote $pacote)
    {
        $pacote->delete();

        return redirect()->route('pacotes.index')->with('success', 'Pacote removido com sucesso!');
    }
}
