<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\colecao;

class colecaoController extends Controller
{
    public function index() {
        $colecaos = colecao::all();
        return view('home',[
            'colecaos'=>$colecaos
        ]);
    }

    public function create() {
        return view('include-colecao');
    }

    public function store(Request $request) {
        $colect = new colecao;
        $colect->name = $request->name;
        $colect->quantity = $request->quantity;
        $colect->descricao = $request->descricao;
        $colect->save();
        return redirect()->route('colect.index')->with('message', 'Item cadastrado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $colect = colecao::findOrFail($id);
        return view('alter-colecao', [
            'colect'=>$colect
        ]);
    }

    public function update(Request $request, $id) {
        $colect = colecao::findOrFail($id); 
        $colect->name = $request->name;
        $colect->quantity = $request->quantity;
        $colect->descricao = $request->descricao;
        $colect->save();
        return redirect()->route('colect.index')->with('message', 'Item alterado com sucesso!');
    }

    public function destroy($id) {
        $colect = colecao::findOrFail($id);
        $colect->delete();
        return redirect()->route('colect.index')->with('message', 'Item excluído com sucesso!');
    }
}
