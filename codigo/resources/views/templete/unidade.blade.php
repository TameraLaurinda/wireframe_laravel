
@extends('layout')

@section('navbar')
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/contato">Contato</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Unidade</a>
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
<div class="row mb-3 justify-content-between">
    <div>
        <label class="col-form-label disabled" for="">Nome Fantadia:</label>
    </div>
    <div class="input-group col-9">
        <input  type="text" class="form-control disabled">
    </div>
</div>
<div class="row mb-3 justify-content-between">
    <label class="col-form-label" for="">Integração:</label>
    <div class="input-group col-9">
        <input  type="text" class="form-control">
         <div class="input-group-append">
            <button>lupa</button>
        </div>
    </div>
</div>
<div class="row mb-3 justify-content-between">
    <label class="col-form-label" for="">In key:</label>
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

<div class="row mb-3">
    <label class="col-form-label mr-2" for="">Município:</label>
    
    <div class="col ml-5 pd-5">
        <input type="text" class="form-control">
    </div>
    <div class="col input-group pd-2">
        <select name="" id="">
            <option value="">--</option>
        </select>
    </div>
    <div class="input-group col-4 pl-1 aling-self-end">
        <input  type="text" class="form-control">
         <div class="input-group-append">
            <button>lupa</button>
        </div>
    </div>
    
</div>
<div class="row mb-3 justify-content-between">
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
        <label class="col-form-label" for="">Tipo:</label>
    </div>
    <div class="input-group col ml-5  ">
        <select name="" id="" >
            <option value=""> --Tipo</option>
            <option value="0">Json</option>
            <option value="1">Webview</option>
            <option value="2">XML</option>
            <option value="3">HL7</option>
        </select>
    </div>
    <div class="pt-1 ">
        <label class="col-form-label" for="">Status:</label>
    </div>
    <div class="input-group col ">
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
