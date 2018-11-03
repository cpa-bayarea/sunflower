@extends('sunflower.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Usuários</h2>
            <form action="{{route('usuarios.store')}}" method="POST" autocomplete="off">

                <input type="hidden" name="_token" value="{{csrf_token()}}" required>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="email">Nome Completo</label>
                        <input type="text" class="form-control" id="nome" required value="{{$usuarios->name}}" name="nome" placeholder="Nome completo">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required value="{{$usuarios->email}}" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                    </div>
                </div>

                <div class="form-group">
                    <label for="ENDERECO">Endereço</label>
                    <input type="text" class="form-control" id="ENDERECO" required value="{{$usuarios->ENDERECO}}" name="ENDERECO" placeholder="Logradouro, rua">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="CIDADE">Cidade</label>
                        <input type="text" class="form-control" id="CIDADE" required value="{{$usuarios->CIDADE}}" name="CIDADE" placeholder="Brasília">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="UF">UF</label>
                        <input type="text" class="form-control" id="UF" required value="{{$usuarios->UF}}" name="UF" placeholder="DF">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="CEP">CEP</label>
                        <input type="text" class="form-control" id="CEP" required value="{{$usuarios->CEP}}" name="CEP" placeholder="70.000-000">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="PERFIL">Perfil</label>
                        <select class="form-control" id="PERFIL" name="PERFIL">
                            <option value="">Selecione uma opção</option>
                            <option value="ADMINISTRADOR">Administrador</option>
                            <option value="USUARIO">Usuário</option>
                        </select>
                    </div>
                </div>

                <div class="btn-group btn-block">
                    <button type="submit" class="btn btn-success">INSERIR</button>
                    <button type="reset" class="btn btn-warning">APAGAR</button>
                </div>
            </form>
        </div>
    </div>
@endsection