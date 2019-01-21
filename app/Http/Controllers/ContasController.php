<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pdf;

class ContasController extends Controller

{
    public function index(){
       
        $pdfs = Pdf::all()->toArray();
 
        // Repassando para a view
        return view('prestacaodecontas.contas', compact('pdfs'));
    }

    public function upload(Request $request)
    {
        /**
         * @var uploadFile
         */
      
        $file = $request->file('pdf');
        $fileName = $file->getClientOriginalName(); //NOME DO ARQUIVO
        $fileUrl = storage_path();                  //URL DO ARQUIVO
        $file->storeAs('uploads',$fileName);        //UPLOAD DO ARQUIVO COM NOME ORIGINAL
        
        
        $pdf = new Pdf
        ([
            'nome'  => $fileName, //$request->get('nome')
            'url'   => $fileUrl 
        ]);

        $pdf->save();
        return view('prestacaodecontas.contas');
        
    }

    public function create()
    {
        
        return view('prestacaodecontas.contas');

    }

         

}