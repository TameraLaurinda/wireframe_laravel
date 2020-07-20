@extends('layout')

@section('navbar')

<ul class="navbar-nav nav-justify-content-center">
    <li class="nav-item">
        <a class="nav-link disabled" href="#">Contato</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/unidade">Unidade</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="/atestado">Atestado</a>
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
<div class="row mb-3">
    <div>
        <label class="col-form-label mr-5" for="">CNPJ:</label>
    </div>
    <div class="input-group col-6 ml-5">
        <input  type="number" class="form-control">
        <div class="input-group-append">
            <button>lupa</button>
        </div>
    </div>
</div>
<div class="row mb-3 justify-content-lg-between">
    <label class="col-form-label" for="">Razão Social:</label>
    <div class="input-group col-9">
        <input  type="text" class="form-control">
        <div class="input-group-append">
            <button>lupa</button>
        </div>
    </div>
</div>
<div class="row mb-3 justify-content-between">
    <label class="col-form-label" for="">Nome Fantasia:</label>
    <div class="input-group col-9">
        <input  type="text" class="form-control">
        <div class="input-group-append">
            <button>lupa</button>
        </div>
    </div>
</div>
<div class="row mb-3 justify-content-between">
    <label class="col-form-label" for="">E-mail:</label>
    <div class="col-9 ">
        <input  type="email" class="form-control">
    </div>
</div>
<div class="row mb-3 justify-content-lg-between">
    <label class="col-form-label" for="">In user:</label>
    <div class="input-group col-9">
        <input  type="text" class="form-control">
        <div class="input-group-append">
            <button>lupa</button>
        </div>
    </div>
</div>
<div class="row mb-3 justify-content-lg-between">
    <label class="col-form-label" for="">Logomarca:</label>
    <div class="input-group col-9">
        <input  type="text" class="form-control">
        <div class="input-group-append">
            <button>lupa</button>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="pt-1 mr-5">
        <label class="col-form-label" for="">Status:</label>
    </div>
    <div class="input-group col-4 ml-5">
        <select name="" id="" >
            <option value=""> --Status</option>
            <option value="0">Ativo</option>
            <option value="1">Inativo</option>
        </select>
    </div>
</div>
@endsection

@section('buttons')                           
<button class="btn btn-primary btn-sm">Incluir</button>
<button class="btn btn-primary btn-sm disabled">Alterar</button>
<button class="btn btn-primary btn-sm disabled">Excluir</button>
<button class="btn btn-primary btn-sm disabled">Limpar</button>
@endsection