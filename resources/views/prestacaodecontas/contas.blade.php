<html>
    <head></head>
    <body>
        <form action="{{ route('uploadPdf') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            
            <input type="file" name="pdf">
            <br>
            <button type="submit" name="button">Enviar</button>

            ...
        </form>

        <div>
            <h1>Listagem das categorias:</h1>
            
            @foreach ($pdfs as $pdf)
        
                <p>Nome do arquivo: {{ $nome = $pdf['nome'] }}</p>
               <a href="{{ route('download', $nome)}}">download</a> 
                
            @endforeach
         
        </div>
    </body>
</html>
