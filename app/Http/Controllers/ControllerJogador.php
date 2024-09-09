<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mdJogador;

class ControllerJogador extends Controller
{
    public function index()
    {
        $dados = mdJogador::all();
        return view('exibePersonagem', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoPersonagem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new mdJogador();
        $dados->Nome = $request->input('nome');
        $dados->Obra = $request->input('Obra');
        $dados->Sexo = $request->input('Sexo');
        if($dados->save())
            return redirect('/Personagem')->with('success', 'Personagem cadastrado com sucesso!!');
        return redirect('/Personagem')->with('danger', 'Erro ao cadastrar Personagem!');
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
    public function edit(string $id)
    {
        $dados = mdJogador::find($id);
        if(isset($dados))
            return view('editarPersonagem', compact('dados'));
        return redirect('/Personagem')->with('danger', 'Cadastro do Personagem não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = mdJogador::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nome');
            $dados->Obra = $request->input('Obra');
            $dados->Sexo = $request->input('Sexo');
            $dados->save();
            return redirect('/Personagem')->with('success', 'Cadastro do Personagem atualizado com sucesso!!');
        }
        return redirect('/Personagem')->with('danger', 'Cadastro de Personagem não localizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = mdJogador::find($id);
        if(isset($dados)){
                $dados->delete();
                return redirect('/Personagem')->with('success', 'Cadastro do Personagem deletado com sucesso!!');
        }else{
            return redirect('/Personagem')->with('danger', 'Cadastro não localizado!!');
        } 
    }
}
