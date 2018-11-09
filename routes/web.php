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

Route::get('/', function () {
    return view('index');
});

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'usuarios'] ,function (){
        Route::post('/status/','UsuariosController@acesso')/*->name('usuarios.status')*/; #ALTERA O STATUS 'ATIVO'/'INATIVO'
    }); #USUARIOS

    Route::resource('usuarios','UsuariosController'); //#Usuários

    Route::resource('postagens','PostagensController'); //#Postagens

    Route::resource('logs','LogsController'); //#Logs

    Route::get('/home', 'HomeController@index')->name('home'); #NÃO MEXA NESSE GATO!

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();