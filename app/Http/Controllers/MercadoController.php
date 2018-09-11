<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\produtos;

class MercadoController extends Controller
{
    //controller mercado aqui vamos setar todas as rotas de CRUD do sistemas 
    //insert de produtos, delete de produtos, update de produtos, e a leitura de produtos
    //lembrando que sempre que trabalhamos com GET estamos chamando as telas apenas visualmente
    //e quando estamos utilizando os metodos com POST estamos apresentando as funções que seram apresentadas na tela
    //seguindo o padrao das rotas que sao sempre GET e POST
    //mas isso acredito que nao importa agora caso queiram ver isso podem na pasta routes/web.php, nessa pasta tem todas aas
    //rotas do app, caso queiram visualziar elas todas podem utilizar o comando php artisan route:list no terminal de vcs que ele ira apresentar todas as rotas com os seus metodos


    public function index(){

        $produtos =  produtos::all();
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
        produtos::create($request::all());

        return redirect()->back()->with('message', 'Produto cadastrado com sucesso');
    }
    //metodo que ira apresentar ao usuario a tela de editar os produtos
    //estou passando o id como parametro pois sempre que estamos editando algum produtos precisamos identificar qual item estamos trabalhando
    //por isso sempre temos que passsar paramentro para funções especificas
    //assim como nos metetodos anteriores o retorno de uma tela no laravel é sempre com return view();

    public function editar($id) {
        //nesse exemplo aqui veja só, criei uma variavel $produtos
        //essa variavel vai receber o meu modelo produtos e junto a esse modelo utilzo um metodp padrrao do laravel
        //O find que serve para econtrar, o que estou dizendo pro meu codigo
        //"ola vai la nesse cara ai MODEL e busca o ID.
        //pois como cliquei em um produto para ser editado logo tenho o ID dele comigo, entao vou encontras esse ID para que o produto editado seja sempre o certo
        $produto = produtos::find($id);

        //retorne aqui a tela que sera apresentado logo apos eu apresentar o produtos junto com ele o ID
        return view('content.editar',compact('produto'));

    }
    //TESTE PARA VER SE DA PUSH--GUSTAVO
    //nesse metodo aqui é um POST aqui fazemos a ação
    //o que vai ser feito dentro da tela de editar, entao o que vai precisar ser feito
    //1 precisamos validar os campos que vai ter dentro do formulario de editar
    //2 precisamos dar um UPDATE no banco aplicando as alterações feitas
    //3 apresentar uma mensagem para o usuario de que o produtos foi editado com sucesso
    //OBS: seguindo a logica de que estamos trabalhando com um produto especifico, precisamos do ID dele
    //isso eu ja fiz ali em cima tbm, ta GG EZ
    /**
     * Exemplo de validate ja fiz ali em cima
     * params $request
     * params $id
     * esse sao os parametros que precisam ser passados
     */
    public function update(Request $request, $id) {
        request()->validate([
            'nome_produto' => 'required',
            'tipo_produto'=> 'required',
            'preco_produto' => 'required',
            'disponibilidade' => 'required',
        ]);
        $produto = produtos::find($id);
        $update = $produto::update($request);
        return redirect()->back()->with('message', 'Produto Alterado com sucesso');
    }
    //nesse metodo vamos deletar um produto
    //seguindo a logica de que estamos trabalhando novamente com um produtos em especifico, precisamos do ID novamente
    //só que nesse caso substituimos o metodo de find() pelo metodo destroy() ou delete()
    //tanto faz qualquer um desse funciona, prefiro particularmente usar o destroy
    //apresentar um retorno dizendo que o produto foi deletado
    /**
     * params $id
     */
    public function destroy($id) {
        $produto = produtos::destroy($id);
        return redirect()->back()->with('message', 'Produto Deletado com sucesso');
    }
    //metodo que var trazer todos os produtos em formato de JSON lembrando que o app só consiguira ler o app se tiver esse retorno JSON
    //como fazer?
    //simples, nesse metodo nao temos parametro a nao que seja de um produto especifico
    //mas como vamos trazer a lista de produtos entao deixamos sem parametro mesmo
    //o metodo te que ter um SELECT tipo de MYSQL mesmo
    //existem maneiras de fazer isso no laravel
    /**
     * exemplos de select
     * podemos usar como no primeiro metodo $variavel = produtos:all() 'com isso estamos chamando todos registros do banco'
     * podemos usar tambem assim $variavel = DB::table('tabela') 'caso tenha condições como um WHERE etc... usamos o seta 
     * ('tabela')->where(); mas nao estamos trabalhando com produtos especificos entao nao tem WHERE
     * ou podemos usar o jeito BRUTO $variavel  = "SELECT * FROM tabela"
     * aconselho o primeiro ou façam os 3 e testam
     * e esse metodo precisa tem uma resposta? como?
     * return response()->json($variavel); essa variavel é a variavel que vai receber a consulta que faremos, o select vai
     *  ser salvo em um variavel na memoria entao a resposta que vamos passa é ela
     * 
     */
    public function listJson() {
        $produtos = produtos::all();

        return response()->json($produtos);
    }
    //leiam os comentario é importante, hahahaha!
    //duvidas chamem eu
}
