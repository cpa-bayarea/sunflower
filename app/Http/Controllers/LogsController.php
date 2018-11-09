<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogsController extends Controller{

    /**
     * Display a listing of the resource.
     * @author Gilson vieira Castro Júnior <castrok@live.com>
     * @return \Illuminate\Http\Response
     */
    public function index(){
        try{
            $logs = Log::query()->select(['Logs.*','users.name'])->select()
                ->join('users','users.id','Logs.USUARIO')
                ->get();
        }

        catch (\Exception $e) {
            report($e);
        }

        return view('sunflower.Logs.index',compact('logs'));
    }

    /**
     * Show the form for creating a new resource.
     * @author Gilson vieira Castro Júnior <castrok@live.com>
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     * @author Gilson vieira Castro Júnior <castrok@live.com>
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     * @author Gilson vieira Castro Júnior <castrok@live.com>
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @author Gilson vieira Castro Júnior <castrok@live.com>
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     * @author Gilson vieira Castro Júnior <castrok@live.com>
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
    }

    /**
     * Remove the specified resource from storage.
     * @author Gilson vieira Castro Júnior <castrok@live.com>
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }
}
