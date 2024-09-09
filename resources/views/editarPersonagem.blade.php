@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO PERSONAGEM</h1>
            </div>
        </div>
        <form action="/jogador/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       value="{{$dados->Nome}}">
            </div>
            <div class="form-group">
                <label for="Obra">Obra:</label>
                <input type="Obra" class="form-control" name="Obra" 
                       value="{{$dados->Obra}}">
            </div>
            <div class="form-group">
                <label for="Sexo">Sexo:</label>
                <input type="Sexo" class="form-control" name="Sexo" 
                       value="{{$dados->Sexo}}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='/Personagem';" type="button" 
                    class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection