<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//metodo esta resolvido, das rotas esta funcionando localhost/login para iniciar a aplicação ou utitlizando no proprio terminal do VS CODE
//digitando o comando php artisan serve ele ja inicia a aplicação

//Route::get('/login', 'Auth/LoginController@showLoginForm')->name('login');

$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');


Route::get('/home', 'MercadoController@index');

Route::get('/novo', 'MercadoController@novo');

Route::post('/adicionar', 'MercadoController@adicionar');

Route::get('/editar/{id}', 'MercadoController@editar');

Route::put('/update/{id}', 'MercadoController@update');

Route::delete('/destroy/{id}', 'MercadoController@destroy');

Route::get('/listaTodosProdutos', 'MercadoController@listaTodosProdutos');

Route::get('/listaUmProduto/{id}', 'MercadoController@listaUmProduto');