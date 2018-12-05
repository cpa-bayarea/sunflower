<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Postagem;
use Illuminate\Http\Request;

class PostagensController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $postagens = Postagem::all();
        return view('sunflower.Postagem.index',compact('postagens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        try {
            return view('sunflower.Postagem.form');
        }
        catch (\Exception $e) {
            report($e);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $postagem = new Postagem();

        $postagem->TEXTO = $request->TEXTO;
        $postagem->SECAO = $request->SECAO;
        $postagem->DATA = date("Y-m-d H:i:s");
        $postagem->save();

        $log = new Log();
        $log->USUARIO = auth()->user()->id;
        $log->NATUREZA = 'NOVA PUBLICAÇÃO NO SITE';

        return response()->route('postagens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }
}
