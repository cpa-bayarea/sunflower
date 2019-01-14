<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContasController extends Controller

{
    public function index(){
        return view('prestacaodecontas.contas');
    }

    public function upload(Request $request)
    {
        /**
         * @var uploadFile
         */
        

       // $file = $request;
       // dd($file); 
        $file = $request->file('pdf');
        $file->store('uploads');
        // $file = \Input::file('pdf');
        // $path = $request->file('avatar')->store('arquivosPDF');
        // 
    }

         

}