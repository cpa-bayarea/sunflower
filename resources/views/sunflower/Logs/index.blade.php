@extends('sunflower.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Registro de atividade</h2>
            <div class="container-fluid" id="tablesContainer">
                <table class="table table-bordered table-sm table-striped" id="table">
                    <thead>
                    <tr>
                        <th class="text-center"><b>USUÁRIO</b></th>
                        <th class="text-center"><b>NATUREZA</b></th>
                        <th class="text-center"><b>DATA</b></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($logs as $log)
                        <tr>
                            <td>{{$log->USUARIO}}</td>
                            <td>{{$log->NATUREZA}}</td>
                            <td>{{$log->DATA}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection