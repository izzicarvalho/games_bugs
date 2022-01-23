<?php

namespace App\Http\Controllers;

use App\Models\Bugs;
use Illuminate\Http\Request;

class BugsController extends Controller
{
    public function create()
    {
        return view('bugs.create');
    }
    public function store(Request $request){
        Bugs::create([
            'titulobug' => $request->titulobug,
            'detalhesbug' => $request->detalhesbug,
            'caminhoimg' => $request->caminhoimg,
            'tipo' => $request->tipo,
        ]);
        return "Bug cadastrado com sucesso!";
    }

    public function show($id){        
        $bug = Bugs::findOrFail($id);

        return view('bugs.show', ['bug'=>$bug]);
    }

    public function edit($id){
        $bug = Bugs::findOrFail($id);

        return view('bugs.edit', ['bug'=>$bug]);
    }

    public function update(Request $request, $id){
        $bug = Bugs::findOrFail($id);

        $bug->update([
            'titulobug' => $request->titulobug,
            'detalhesbug' => $request->detalhesbug,
            'caminhoimg' => $request->caminhoimg,
            'tipo' => $request->tipo,
        ]);
        return "Informações atualizadas com sucesso!";
    }

    public function delete($id){
        $bug = Bugs::findOrFail($id);

        return view('bugs.delete', ['bug'=>$bug]);
    }

    public function destroy($id){
        $bug = Bugs::findOrFail($id);
        $bug->delete();

        return "O bug foi excluído com sucesso!";
    }
}
