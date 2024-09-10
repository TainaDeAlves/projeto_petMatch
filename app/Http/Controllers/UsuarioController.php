<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $users = User::all();
       return view('admin.usuarios.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.usuarios.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => ' required',
            'email' => 'required|string|email|unique:users',
            'cidade'=> 'required|string',
            'estado'=> 'required|string',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'cidade'=> $request->cidade,
            'estado'=> $request->estado,
            'password' => Hash::make($request->senha)
        ]);


        return redirect()->route('admin.usuarios.index')->with('sucesso', 'Usuário cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.usuarios.visualizar', compact('user'));
 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.usuarios.editar', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => ' required',
            'email' => 'required|string|email|unique:users,email,' . $id,
            'cidade'=> 'required|string',
            'estado'=> 'required|string',
            'password' => 'nullable|min:8|confirmed'
        ]);
        $user = User::findOrFail($id);

        $user->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'cidade'=> $request->cidade,
            'estado'=> $request->estado,
            'password' => $request->password ? Hash::make($request->password) : $user->password
        ]);


        return redirect()->route('admin.usuarios.index')->with('sucesso', 'Usuário atulizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->route('admin.usuarios.index')->with('sucesso', 'Usuario deletado com sucesso!!!');
        } catch (\Exception $e) {

            return redirect()->route('.admin.usuarios.index')->with('error', 'Erro ao deletar o usuário');
        }
    }
}
