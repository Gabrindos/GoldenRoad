@extends('layout')
@section('content')
    <div class="position-relative p-3 p-md-5 m-md-3 text-center"style="background-color: black;">
      <div class="col-md-5 p-lg-5 mx-auto my-5" >
        <h1 class="display-4 font-weight-normal text-white">CINEMAÇO</h1>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white" style="background-color: #C0D9D9;">
        <div class="my-3 py-3">
          <h2 class="display-5 font-weight-normal">FILMES</h2>
        </div>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">
        <a href="{{route('novoFilme')}}">Cadastrar</a>
        </button>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">
        <a href="{{route('exibeFilme')}}">Exibir</a>
        </button>
      </div>
      <div class=" mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white"style="background-color: #C0D9D9;">
        <div class="my-3 p-3">
          <h2 class="display-5 font-weight-normal">DIRETORES</h2>
        </div>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">
        <a href="{{route('novoDiretor')}}">Cadastrar</a>
        </button>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">
        <a href="{{route('exibeDiretor')}}">Exibir</a>
        </button>
      </div>
      <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white" style="background-color: #C0D9D9;">
        <div class="my-3 py-3">
          <h2 class="display-5 font-weight-normal">PERSONAGENS</h2>
        </div>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">
        <a href="{{route('novoPersonagens')}}">Cadastrar</a>
        </button>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">
        <a href="{{route('exibePersonagens')}}">Exibir</a>
        </button>
      </div>
  </div>
  @endsection