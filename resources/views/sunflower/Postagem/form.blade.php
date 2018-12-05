@extends('sunflower.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Postagens do site</h2>
            <div class="container-fluid tablesContainer">
                <form method="POST" action="{{route('postagens.store')}}" autocomplete="off">

                    <input type="hidden" name="_token" value="{{csrf_token()}}" required>

                    <textarea id="summernote" name="TEXTO"></textarea>
                    <label for="summernote"></label>

                    <select name="SECAO" id="SECAO">
                        <option value="1">SEÇÃO 1</option>
                        <option value="2">SEÇÃO 2</option>
                        <option value="3">SEÇÃO 3</option>
                    </select>
                    <label for="SECAO"></label>

                    <button type="submit" class="btn btn-success">PUBLICAR</button>
                    <button type="reset" class="btn btn-warning">APAGAR</button>
                </form>
            </div>
        </div>
    </div>
@endsection