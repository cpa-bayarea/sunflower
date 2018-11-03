<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller{
    /**
    Display a listing of the resource.
     *
     * @author Gilson Vieira Castro Júnior <castrok@live.com>
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $usuarios = User::all();
        return view('sunflower.Usuarios.index',compact('usuarios'));
    }

    /**
    Show the form for creating a new resource.
     *
     * @author Gilson Vieira Castro Júnior <castrok@live.com>
     * @return \Illuminate\Http\Response
     */
    public function create(){
        try {
            $usuarios = new User();
        }
        catch (\Exception $e) {
            report($e);
        }

        return view('sunflower.Usuarios.form', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @author Gilson Vieira Castro Júnior <castrok@live.com>
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        print '<pre>'; print_r($request->input());
        $novoUser = new User();
        $novoUser->email = $request->email;
        $novoUser->name = $request->nome;
        $novoUser->password = $request->password;
        $novoUser->ENDERECO = $request->ENDERECO;
        $novoUser->CIDADE = $request->CIDADE;
        $novoUser->UF = $request->UF;
        $novoUser->STATUS = 'ATIVO';
        $novoUser->CEP = $request->CEP;
        $novoUser->PERFIL = $request->PERFIL;
        $novoUser->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @author Gilson Vieira Castro Júnior <castrok@live.com>
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @author Gilson Vieira Castro Júnior <castrok@live.com>
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        try {
            $usuarios = User::Find($id);
        }
        catch (\Exception $e) {
            report($e);
        }

        return view('sunflower.Usuarios.form', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
    @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @author Gilson Vieira Castro Júnior <castrok@live.com>
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @author Gilson Vieira Castro Júnior <castrok@live.com>
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        try {
            $sefoi = User::query()->find($id)->delete();
            return response()->json($sefoi);
        }

        catch (\Exception $e) {
            report($e);

        }
    }

    /**
     * Altera o status do usuario
     * @author Gilson Vieira Castor Júnior
     * @return boolean
     * @param mixed $id Array
     */

    public function acesso(Request $id){

        try{
            $Usuario = User::query()->where('id', $id->id)->get()->first()->toArray();

            switch ($Usuario['STATUS']){
                case 'ATIVO':
                    $status = 'INATIVO';
                    break;

                case 'INATIVO':
                    $status = 'ATIVO';
                    break;
            }
            $Usuario = User::query()->where('id', $id->id)->update(['STATUS' => $status]);
        }

        catch (\Exception $e){
            \report($e);
        }

        return  response()->json($Usuario);

    }


}
