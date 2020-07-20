<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    /*public function index(User $model)
    {
        return view('users.index');
    }*/

    public function home1(){

        return view('template.home');
    }

    public function unidade(){

        return view('unidade.layout');
    }
    public function atestado(){

        return view('atestado.layout');
    }
    public function usuario(){

        return view('usuario.layout');
    }
}
