@extends('layout')
@section('content')
<div class="container py-4">
    <div class="position-relative p-3 p-md-5 m-md-3 text-center"style="background-color: #C0C0C0;">
      <div class="col-md-5 p-lg-5 mx-auto my-5" >
        <h1 class="display-4 font-weight-normal text-white">CADASTRAR FILME</h1>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
        <form action="{{route('gravaFilme')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" 
                       placeholder="Informe o nome do filme">
            </div>
            <hr>
            <div class="form-group">
                <label for="Genero">Genero:</label>
                <input type="Genero" class="form-control" name="Genero" 
                       placeholder="Informe o genero do filme">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="button" class="btn btn-danger btn-sm">
                <a href="/">Cancelar</a>
            </button>
        </form>
</div>
</div>
</div>
@endsection