<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * Exibe a lista de todos os pets.
     */
    public function index()
    {
        $pets = Pet::with(['usuario', 'ong'])->get(); // Certifica-se de carregar as relações
        return view('admin.pets.index', compact('pets'));
    }

    /**
     * Exibe o formulário para criar um novo pet.
     */
    public function create()
    {
        return view('admin.pets.cadastrar');
    }

    /**
     * Armazena um novo pet no banco de dados.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'raca' => 'required|string|max:255',
            'porte' => 'required|string|max:50',
            'idade' => 'required|string|max:50',
            'destaque' => 'required|string|max:255',
            'segundo_destaque' => 'nullable|string|max:255',
            'terceiro_destaque' => 'nullable|string|max:255',
            'descricao' => 'required|string',
            'localizacao' => 'required|string|max:255',
            'usuario_id' => 'required|exists:users,id',
            'ongs_id' => 'required|exists:ongs,id',
        ]);

        Pet::create($validated);

        return redirect()->route('admin.pets.index')->with('success', 'Pet criado com sucesso!');
    }

    /**
     * Exibe os detalhes de um pet específico.
     */
    public function show(Pet $pet)
    {
        return view('admin.pets.visualizar', compact('pet'));
    }

    /**
     * Exibe o formulário para editar um pet.
     */
    public function edit(Pet $pet)
    {
        return view('admin.pets.editar', compact('pet'));
    }

    /**
     * Atualiza os dados de um pet no banco de dados.
     */
    public function update(Request $request, Pet $pet)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'raca' => 'required|string|max:255',
            'porte' => 'required|string|max:50',
            'idade' => 'required|string|max:50',
            'destaque' => 'required|string|max:255',
            'segundo_destaque' => 'nullable|string|max:255',
            'terceiro_destaque' => 'nullable|string|max:255',
            'descricao' => 'required|string',
            'localizacao' => 'required|string|max:255',
            'usuario_id' => 'required|exists:users,id',
            'ongs_id' => 'required|exists:ongs,id',
        ]);

        $pet->update($validated);
        $pet->update($request->all());


        return redirect()->route('admin.pets.index')->with('success', 'Pet atualizado com sucesso!');
    }

    /**
     * Remove um pet do banco de dados.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();

        return redirect()->route('admin.pets.index')->with('success', 'Pet excluído com sucesso!');
    }
}
