@extends('sunflower.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Usuários</h2>
            <div class="container-fluid" style="overflow-y: hidden; overflow-x: visible;">
                <table class="table table-bordered table-sm table-striped" id="table">
                    <thead>
                    <tr>
                        <th class="text-center"><b>NOME</b></th>
                        <th class="text-center"><b>EMAIL</b></th>
                        <th class="text-center"><b>PERFIL</b></th>
                        <th class="text-center"><b>ACESSO</b></th>
                        <th class="text-center"><b>AÇÕES</b></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->PERFIL}}</td>
                            <td class="text-center">
                                <label class="switch">
                                    <input type="checkbox" data-id="{{$usuario->id}}" class="statusUsuario" {{($usuario->STATUS == 'ATIVO')? 'checked' :  NULL}}>
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td class="text-center">
                                <a href="{{route('usuarios.edit',$usuario->id)}}"><i class="fas fa-check fa-2x"  style="color:green"></i></a>
                                <a href="" class="userDelete" data-user="{{$usuario->id}}"><i class="fas fa-times fa-2x"  style="color:red"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
