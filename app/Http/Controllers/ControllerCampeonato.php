<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mdCampeonato;
use App\Models\mdTimeCampeonato;

class ControllerCampeonato extends Controller
{
    public function index()
    {
        $dados = mdCampeonato::all();
        return view('exibeFilme', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('novoFilme');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new mdCampeonato();
        $dados->Nome = $request->input('nome');
        $dados->Genero = $request->input('Genero');
        if($dados->save())
            return redirect('/filme')->with('success', 'Campeonato cadastrado com sucesso!!');
        return redirect('/filme')->with('danger', 'Erro ao cadastrar campeonato!');
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
        $dados = mdCampeonato::find($id);
        if(isset($dados))
            return view('editarFilme', compact('dados'));
        return redirect('/filme')->with('danger', 'Cadastro do filme não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = mdCampeonato::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nome');
            $dados->Genero = $request->input('Genero');
            $dados->save();
            return redirect('/filme')->with('success', 'Cadastro do filme atualizado com sucesso!!');
        }
        return redirect('/filme')->with('danger', 'Cadastro de filme não localizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = mdCampeonato::find($id);
        if(isset($dados)){
            $times = mdTimeCampeonato::where('campeonato_id' , '=' , $id)->first();
            if(!isset($times)){
                $dados->delete();
                return redirect('/filme')->with('success', 'Cadastro do filme deletado com sucesso!!');
            }else{
                return redirect('/filme')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/filme')->with('danger', 'Cadastro não localizado!!');
        } 
    }
}
