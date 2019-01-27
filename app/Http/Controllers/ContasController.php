<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pdf;
use Illuminate\Support\Facades\Storage;

class ContasController extends Controller

{
    public function index(){
       
        $pdfs = Pdf::all();
 
        // Repassando para a view
        return view('prestacaodecontas.contas', compact('pdfs'));
    }

    public function download($nome) 
    {
        //$path = storage_path($nome);
        return Storage::download($nome);  
    }

    public function upload(Request $request)
    {
        /**
         * @var uploadFile
         */
      
        $file = $request->file('pdf');
        $fileName = $file->getClientOriginalName(); //NOME DO ARQUIVO
        $fileUrl = storage_path();                  //URL DO ARQUIVO
        $file->storeAs('',$fileName);        //UPLOAD DO ARQUIVO COM NOME ORIGINAL
                
        $pdf = new Pdf
        ([
            'nome'  => $fileName, 
            'url'   => $fileUrl 
        ]);

        $pdf->save(); // salva o $pdf acima no banco

        //redireciona a páigna para listar novamente os arquivos
        $pdfs = Pdf::all();
        return view('prestacaodecontas.contas', compact('pdfs'));
        
    }

    public function create()
    {
        
        return view('prestacaodecontas.contas');

    }

         

}