<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class BevicredController extends Controller {

    //show home
    public function index() {

        $clientes = Clientes::all();
        return view('content.home', compact('clientes'));
    }
    //show cadastro de cliente
    public function novo() {

        return view('content.novo');
    }
    //store cadastro de cliente
    public function adicionar(Request $request) {
        request()->validate([
            'nome_cliente' => 'required',
            'email_cliente' => 'required',
            'celular_cliente' => 'required',
            'endereco_cliente' => 'required'
        ]);
        Clientes::create($request->all());

        return redirect()->back()->with('message', 'Cliente cadastrado com sucesso');

    }
    //show pagina editar
    public function editar($id) {

        $cliente = Clientes::find($id);
        return view('content.editar', compact('cliente'));
    }
    //update dados do cliente
    public function update(Request $request, $id) {
        request()->validate([
            'nome_cliente' => 'required',
            'email_cliente' => 'required',
            'celular_cliente' => 'required',
            'endereco_cliente' => 'required'
        ]);
        $cliente = Clientes::find($id);
        $cliente->update($request->all());

        return redirect()->back()->with('message', 'Cliente Atualizado com sucesso');
        
    }
    //delete cliente
    public function destroy($id) {
        $cliente = Clientes::destroy($id);
        return redirect()->back()->with('message', 'Cliente deletado com sucesso');
    }
    //api de retorno
    public function apiJson($request) {
        

    }
    
}
