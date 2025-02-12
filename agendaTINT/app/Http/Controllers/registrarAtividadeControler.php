<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelAgenda;

class registrarAtividadeControler extends Controller
{
    public function index(){
        $dados = modelAgenda::all(); //tras todos os dados da tabela
        return view('paginas.cadastrar')->With('dados',$dados);
    }//fim do método -retornar dados
    public function store(request $request){
        $data = $request->input('dataEvento');
        $descricao = $request->input('descricaoTexto');
        //Inserindo os dados da tabela
        $model = new modelAgenda();
        $model->dataEvento = $data;
        $model->descricao = $descricao;

        $model->save();//armazena
        return redirect('/cadastrar');
    }//fim metodo requisicao de cadastro
}// todas as operaçoes do BD
