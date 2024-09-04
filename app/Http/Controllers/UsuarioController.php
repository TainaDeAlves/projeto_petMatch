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
       $usuarios = User::all();
       return view('admin.usuarios.index', compact('usuarios'));
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
            'email' => 'required|string|email|unique:usuarios',
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
    public function show()
    {

        return view('admin.usuarios.visualizar');
 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('admin.usuarios.editar');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
