@extends('layout')

@section('navbar')
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="/contato">Contato</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="/unidade">Unidade</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/atestado">Atestado</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Usuário</a>
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
<div class="row mb-3">
  <div class="mr-5">
      <label class="col-form-label" for="">CPF:</label>
  </div>
  <div class="input-group col-6 ml-5">
      <input  type="number" class="form-control">
       <div class="input-group-append">
          <button>lupa</button>
      </div>
  </div>
</div>
<div class="row mb-3 justify-content-between">
  <div>
      <label class="col-form-label disabled" for="">Nome:</label>
  </div>
  <div class="input-group col-9">
      <input  type="text" class="form-control disabled">
  </div>
</div>
<div>
  <table class="table table-striped table-bordered">
      <tr class="thead-">
          <th>CPF</th>
          <th>Usuário</th>
      </tr>
      <tbody>
          <tr>
              <td>cpf</td>
              <td>user</td>
          </tr>
          <tr>
              <td>cpf</td>
              <td>user</td>
          </tr>
          <tr>
              <td>cpf</td>
              <td>user</td>
          </tr>
          <tr></tr>
      </tbody>
  </table>
</div>
@endsection

@section('buttons')
<button class="btn btn-primary btn-sm">Incluir</button>
<button class="btn btn-primary btn-sm disabled">Excluir</button>
<button class="btn btn-primary btn-sm disabled">Limpar</button>
@endsection


      

 