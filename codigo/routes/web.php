<?php

use Illuminate\Support\Facades\Route;


//Rota para chama o acesso das view por uma class controller
Route::get('/contato', 'AppController@contato' )
->name('contato');

Route::get('/unidade', 'AppController@unidade' );

Route::get('/atestado', 'AppController@atestado' );

Route::get('/usuario', 'AppController@usuario' );

Route::get('/index', 'LoginController@index');

Route::post('/index', 'LoginController@logar');


