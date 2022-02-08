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

use App\Http\Middleware\Login;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'LoginController@index')->name('login_index');

Route::post('/login', 'LoginController@login')->name('login_login');

Route::get('/cadastro', 'CadastroUsuarioController@index')->name('cadastro_index');

Route::post('/cadastro/save', 'CadastroUsuarioController@store')->name('cadastro_store');

Route::middleware(Login::class)->prefix('/login')->
group(function(){
    

Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/pessoas', 'PessoasController@index')->name('pessoas_index');

Route::post('/pessoas/save', 'PessoasController@store')->name('pessoas_store');

Route::get('/pessoas/editar/{id}', 'PessoasController@editarIndex')->name('pessoas_editar');

Route::get('/pessoas/visualizar', 'PessoasController@exibirTodos')->name('pessoas_exibir_todos');

Route::post('/pessoas/filtro', 'PessoasController@filter')->name('pessoas_filter');

Route::post('/pessoas/editar', 'PessoasController@update')->name('pessoas_update');

Route::get('/pessoas/deletar/{id}', 'PessoasController@destroy')->name('pessoas_destroy');

Route::get('/protocolos', 'ProtocolosController@index')->name('protocolos_index');

Route::get('/protocolos/visualizar', 'ProtocolosController@exibirTodos')->name('protocolos_exibir_todos');

Route::post('/protocolos/save', 'ProtocolosController@store')->name('protocolos_store');

Route::get('/protocolos/deletar/{id}', 'ProtocolosController@destroy')->name('protocolos_destroy');

Route::get('/protocolos/editar/{id}', 'ProtocolosController@editarIndex')->name('protocolos_editar');

Route::post('/protocolos/editar', 'ProtocolosController@update')->name('protocolos_update');

Route::post('/protocolos/filtro', 'ProtocolosController@filter')->name('protocolos_filter');

});
