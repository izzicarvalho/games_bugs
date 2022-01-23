<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function create()
    {
        return view('usuarios.create');
    }
    public function store(Request $request){
        Usuarios::create([
            'login' => $request->login,
            'senha' => $request->senha,
            'tipo' => $request->tipo,
        ]);
        return "Usuario cadastrado com sucesso!";
    }

    public function show($id){        
        $usuario = Usuarios::findOrFail($id);

        return view('usuarios.show', ['usuario'=>$usuario]);
    }

    public function edit($id){
        $usuario = Usuarios::findOrFail($id);

        return view('usuarios.edit', ['usuario'=>$usuario]);
    }

    public function update(Request $request, $id){
        $usuario = Usuarios::findOrFail($id);

        $usuario->update([
            'login' => $request->login,
            'senha' => $request->senha,
            'tipo' => $request->tipo,
        ]);
        return "Informações atualizadas com sucesso!";
    }

    public function delete($id){
        $usuario = Usuarios::findOrFail($id);

        return view('usuarios.delete', ['usuario'=>$usuario]);
    }

    public function destroy($id){
        $usuario = Usuarios::findOrFail($id);
        $usuario->delete();

        return "O usuario foi excluído com sucesso!";
    }
}