
<form action="{{ route('uploadPdf') }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
    
    <input type="file" name="pdf">
    <br>
    <button type="submit" name="button">Enviar</button>

    ...
</form>

