@extends('layouts.app')

@section('content')
  

    <div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
          <h1>Crie um Novo Jogo</h1>
        </div>
        <div class="col-sm-2">
          <a href="{{ route('jogos-index') }}" class="btn btn-success">voltar</a>
        </div>
      </div>
        <hr>
        <form action="{{ route('jogos-store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um nome..." required>
            </div>
            <br>
            <div class="form-group">
                <label for="categoria">categoria:</label>
                <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria para o jogo..." required>
            </div>
            <br>
            <div class="form-group">
                <label for="ano_criacao">Ano de criação:</label>
                <input type="number" class="form-control" name="ano_criacao" placeholder="Ano de criação..." required>
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor" placeholder="Digite um valor para o jogo..." required>
            </div>
            <br>
            <div class="form-group">
            
                <input type="submit" class="btn btn-primary" name="submit">
            </div>
        </form>
    </div>
@endsection
