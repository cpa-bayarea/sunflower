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
Auth::routes();

Route::get('/', function () { return view('index'); });

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'usuarios'] ,function (){
        Route::post('/status/','UsuariosController@acesso')/*->name('usuarios.status')*/; #ALTERA O STATUS 'ATIVO'/'INATIVO'
    }); #USUARIOS

    Route::resource('usuarios','UsuariosController'); //#Usuários

    Route::resource('postagens','PostagensController'); //#Postagem

    Route::resource('logs','LogsController'); //#Log
});