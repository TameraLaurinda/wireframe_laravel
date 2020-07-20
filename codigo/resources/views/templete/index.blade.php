@extends('layout')

    <nav class="navbar">
      <div class="navbar-brand" >
        Contato(sac/c0008) 
      </div>
    </nav>

@section('titulo')
<div class="card-header">Login</div>
 @endsection

@section('form')
<form method="post">
    @csrf
    <div class="form-group">
        <label for="email">E-mail</label>
   <input type="email" name="email" id="email" required class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" required min="1" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-3">
        Entrar
    </button>

    <a href="/registrar" class="btn btn-secondary mt-3">
        Registrar-se
    </a>

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class='text-danger'> {{$error}} </div>
        @endforeach
    @endif

</form>
@endsection