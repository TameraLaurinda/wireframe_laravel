<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('templete.index');
    }

    public function logar(Request $request){
        
        if(!Auth::attempt($request->only(['email', 'password']))){
            //Caso haja falha no login usuário sera redirecionado para tela index.php e sera apresentado a mensagem de erro
            return redirect()
            ->back()
            ->withError('Usuário e/ou senha incorreto(os)');
        }else{
            return redirect()->route('contato');
        }

    }
}
