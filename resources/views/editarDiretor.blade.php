@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO DIRETOR</h1>
            </div>
        </div>
        <form action="/Diretor/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       value="{{$dados->Nome}}">
            </div>
            <div class="form-group">
                <label for="Nacionalidade">Nacionalidade:</label>
                <input type="Nacionalidade" class="form-control" name="Nacionalidade" 
                       value="{{$dados->Nacionalidade}}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='/Diretor';" type="button" 
                    class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection