<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mdTime;

class ControllerTime extends Controller
{
    public function index()
    {
        $dados = mdTime::all();
        return view('exibeDiretor', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoDiretor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new mdTime();
        $dados->Nome = $request->input('nome');
        $dados->Nacionalidade = $request->input('Nacionalidade');
        if($dados->save())
            return redirect('/Diretor')->with('success', 'Diretor cadastrado com sucesso!!');
        return redirect('/Diretor')->with('danger', 'Erro ao cadastrar diretor!');
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
        $dados = mdTime::find($id);
        if(isset($dados))
            return view('editarDiretor', compact('dados'));
        return redirect('/Diretor')->with('danger', 'Cadastro do diretor não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = mdTime::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nome');
            $dados->Nacionalidade = $request->input('Nacionalidade');
            $dados->save();
            return redirect('/Diretor')->with('success', 'Cadastro do diretor atualizado com sucesso!!');
        }
        return redirect('/Diretor')->with('danger', 'Cadastro de diretor não localizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = mdTime::find($id);
        if(isset($dados)){
                $dados->delete();
                return redirect('/Diretor')->with('success', 'Cadastro do diretor deletado com sucesso!!');
        }else{
            return redirect('/Diretor')->with('danger', 'Cadastro não localizado!!');
        } 
    }
}
