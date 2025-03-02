<?php

namespace App\Http\Controllers; // nome

use Illuminate\Http\Request; // puxa o request com form
use App\Models\modelAgenda; // conecta com a model

class registrarAtividadeControler extends Controller
{
    public function index(){
        $dados = modelAgenda::all(); //tras todos os dados da tabela
        return view('paginas.cadastrar')->With('dados',$dados); // retorna a visualizacao com dados
    }//fim do método -retornar dados
    public function store(request $request){        
        $data = $request->input('dataEvento'); //Passando as variaves
        $descricao = $request->input('descricaoTexto');
        
        //Inserindo os dados da tabela
        $model = new modelAgenda(); // transformando em objeto
        $model->dataEvento = $data;
        $model->descricao = $descricao; // a ordem importa

        $model->save();//armazena o objeto
        
        return redirect('/cadastrar'); //voltar
    }//fim metodo requisicao de cadastro
}// todas as operaçoes do BD
