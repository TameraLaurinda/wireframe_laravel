<?php

namespace App\Http\Controllers;

class AppController extends Controller{

    //função controller que reotrnar a views 
    public function contato()
    {
        return view('templete.contato');
    }
    public function unidade()
    {
        return view('templete.unidade');
    }
    public function atestado()
    {
        return view('templete.atestado');
    }
    public function usuario()
    {
        return view('templete.usuario');
    }
}

?>