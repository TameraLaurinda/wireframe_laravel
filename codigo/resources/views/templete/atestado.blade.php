
@extends('layout')

@section('navbar')

<ul class="navbar-nav nav-justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href="/contato">Contato</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/unidade">Unidade</a>
    </li>
    <li class="nav-item">
         <a class="nav-link disabled" href="#">Atestado</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="/usuario">Usuário</a>
     </li>
</ul>
@endsection 

@section('titulo')
<div class="card-header">Dados Cadastrais</div>
@endsection

@section('form')  

<div class="row mb-3 justify-content-between">
  <div>
      <label class="col-form-label disabled" for="">Nome Fantasia:</label>
  </div>
  <div class="input-group col-9">
      <input  type="text" class="form-control disabled">
  </div>
</div>

<div class="row mb-3 justify-content-between">
    <label class="col-form-label" for="">Integração:</label>
    <div class="col-9">
        <input  type="text" name="integracao" class="form-control">
    </div>
</div>

<hr>

<div class="row mb-3 justify-content-between">
    <label class="col-form-label" for="">Paciente:</label>
    <div class="input-group col-9">
        <select name="paciente" id="paciente" class="form-control"></select>
        <div class="input-group-appent">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
			</svg>
        </div>
    </div>
</div>

<div class="row mb-3 justify-content-between">
    <label class="col-form-label" for="">Acompanhante:</label>
    <div class="input-group col-9">
        <select name="" id="" class="form-control"></select>
        <div class="input-group-appent" style="font-size: 2em">
            <button class="btn btn-dark btn-sm">
                <i class="fas fa-check-square"></i>
            </button>
        </div>
    </div>
</div>

<div class="row mb-3 justify-content-between">
  <label class="col-form-label" for="">Óbto:</label>                                   
  <div class="col-9 input-group">
      <select name="" id="" class="form-control"></select>
      <div class="input-group-appent">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
      </div>
  </div>
</div>
@endsection

@section('buttons')                           

@endsection
