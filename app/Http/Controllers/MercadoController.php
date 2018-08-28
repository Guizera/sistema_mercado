<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Mercados;

class MercadoController extends Controller
{
    //controller mercado aqui vamos setar todas as rotas de CRUD do sistemas 
    //insert de produtos, delete de produtos, update de produtos, e a leitura de produtos

    public function index(){

        $mercados =  Mercados::all();
        return view('content.home', compact('Mercados'));

    }
    //mostra o cadastro de mercadorias onde o mercado tera acesso
    public function novo() {
            return view('content.novo');
    }
    //metodo onde vamos pegar os dados do nossso formulario e vamos adicionar a nossa tabela de produtos do mercado
    //A imagem vamos trabalhar separado, praticamente um metodo novo para upload 
    public function adicionar(Request $request) {
        request()->validate([
            'nome_produto' => 'required',
            'tipo_produto'=> 'required',
            'preco_produto' => 'required',
            'disponibilidade' => 'required',
        ]);
        //esse metodo serve para gravar produtos
        Mercados::create($request::all());

        return redirect()->back()->with('message', 'Produto cadastrado com sucesso');
    }
}
