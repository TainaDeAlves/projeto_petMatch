<?php 
namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Fotos;

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
        // Validação dos dados do pet
        $validated = $request->validate([
            // Dados do Doador
            'nome_doador' => 'required|string|max:255',
            'contato_doador' => 'required|string|max:255',
            'estado_doador' => 'required|string|max:255',
            'cidade_doador' => 'required|string|max:255',
    
            // Dados do Pet
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:50',
            'raca' => 'required|string|max:255',
            'sexo' => 'required|string|max:1',
            'porte' => 'required|string|max:50',
            'idade' => 'required|string|max:50',
    
            // Destaques
            'destaque_um' => 'required|string|max:255',
            'destaque_dois' => 'nullable|string|max:255',
            'destaque_tres' => 'nullable|string|max:255',
    
            // Descrição
            'descricao' => 'required|string',

        
        ]);
    
        // Criação do pet com os dados validados
        $pet = Pet::create($validated);
    
        if ($request->hasFile('fotos')) {
            foreach ($request->file('fotos') as $file) {
                $caminhoFoto = $file->store('fotos','public');
                Foto::create([
                    'pet_id'=> $pet->id,
                    'imagem'=> $caminhoFoto
                ]);
            }
        }
            
    
        // Redireciona para a página de listagem de pets com uma mensagem de sucesso
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
        // Validação dos dados do pet
        $validated = $request->validate([
            // Dados do Doador
            'nome_doador' => 'required|string|max:255',
            'contato_doador' => 'required|string|max:255',
            'estado_doador' => 'required|string|max:255',
            'cidade_doador' => 'required|string|max:255',
    
            // Dados do Pet
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:50',
            'raca' => 'required|string|max:255',
            'sexo' => 'required|string|max:1',
            'porte' => 'required|string|max:50',
            'idade' => 'required|string|max:50',
    
            // Destaques
            'destaque_um' => 'required|string|max:255',
            'destaque_dois' => 'nullable|string|max:255',
            'destaque_tres' => 'nullable|string|max:255',
    
            // Descrição
            'descricao' => 'required|string',

        ]);
    
        // Atualiza o pet com os dados validados
        $pet->update($validated);
    
           if ($request->hasFile('fotos')) {
                foreach ($request->file('fotos') as $file) {
                $fotoPath = $file->store('fotos', 'public');
                Foto::create([
                    'pet_id' => $pet->id,  
                    'imagem' => $fotoPath 
                ]);
            }
        }
    
        // Redireciona para a página de listagem de pets com uma mensagem de sucesso
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
