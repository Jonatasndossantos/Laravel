<?php

use Illuminate\Support\Facades\Route;
use App\http\Controler\registrarAtividadeControler;

Route::get('/', function () {
    return view('paginas/index');
});

Route::get('/cadastrar', function () {
    return view('paginas/cadastrar');
});

Route::get('/consultar', function () {
    return view('paginas/consultar');
});

Route::get('/editar', function () {
    return view('paginas/editar');
});

route::get('/cadastrar/salvar',[App\http\controllers\registrarAtividadeControler::class, 'store']);