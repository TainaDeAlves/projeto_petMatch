<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use App\Models\Pet;
use Exception;
use App\Http\Controllers\Controller;

class PetApiController extends Controller
{
    public function index()
    {
        $pets = Pet::with(['usuario', 'ong', 'fotos'])->get(); 

         
        $pets = Pet::with('fotos')->get();
        $pets = $pets->map(function ($pets){
          $pets->fotos[0]->imagem = "http://10.56.46.30/projeto_petMatch/public/storage/".$pets->fotos[0]->imagem;
          return $pets;
        });
        



        try {
            return response()->json($pets, 200);
        } catch (Exception $e) {
            return response()->json(["Erro" => "Erro Ao Listar Os Pets"], 500);
        }
    }

    public function show(Pet $pet)  // Alterado de $id para $pet
    {
        try {
            return response()->json($pet, 200);  // $pet já é uma instância do modelo
        } catch (Exception $e) {
            return response()->json(["Erro" => "Pet Não Encontrado"], 404);
        }
    }

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

        // Se o request contiver arquivos de fotos
        if ($request->hasFile('fotos')) {
            foreach ($request->file('fotos') as $file) {
                $caminhoFoto = $file->store('fotos', 'public');
                Foto::create([
                    'pet_id' => $pet->id,
                    'imagem' => $caminhoFoto
                ]);
            }
        }

        // Retorna resposta JSON com mensagem de sucesso
        return response()->json(['message' => 'Cadastro realizado com sucesso!', 'pets' => $pet], 201);
    }

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

        // Se o request contiver arquivos de fotos
        if ($request->hasFile('fotos')) {
            foreach ($request->file('fotos') as $file) {
                $caminhoFoto = $file->store('fotos', 'public');
                Foto::create([
                    'pet_id' => $pet->id,
                    'imagem' => $caminhoFoto
                ]);
            }
        }

        // Retorna resposta JSON com mensagem de sucesso
        return response()->json(['message' => 'Atualização realizada com sucesso!', 'pets' => $pet], 200);
    }

    public function destroy(Pet $pet)
    {
        try {
            $pet->delete(); // Remove o pet diretamente
            return response()->json(["mensagem" => "Pet deletado com sucesso"], 200);
        } catch (Exception $e) {
            return response()->json(["error" => "Erro ao deletar o Pet"], 500);
        }
    }
}
