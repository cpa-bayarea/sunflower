@extends('sunflower.index')
@section('content')
    <table>
        <thead id="exemple" class="table table-striped table-condensed">
        <tr>
            <td>TEXTO</td>
            <td>DATA</td>
            <td>SEÇÃO</td>
        </tr>
        </thead>

        <tbody>
        @foreach($postagens as $postagem)
            <tr>
                <td>{!! $postagem->TEXTO !!}</td>
                <td>{{$postagem->DATA}}</td>
                <td>{{$postagem->SECAO}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection