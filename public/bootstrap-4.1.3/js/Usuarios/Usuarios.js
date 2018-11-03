let joaquina = $('.statusUsuario');

joaquina.on('click',function () {

    let element = $(this);

    $.ajax({
        url: $('base[id="base"]').attr('content') + '/usuarios/status',

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },

        data:{
            'id' : element.data('id')
        },

        type:'POST',
        dataType: "json",

        success:function (data){
            console.log(data);
            swal({
                title: 'STATUS ALTERADO COM SUCESSO',
                type: 'success'
            });
        },
        error: function (data) {
            console.log(data);
            swal({
                title: 'STATUS FALHA AO ALTERAR STATUS',
                type: 'error'
            });

        }
    });
});

$(document).ready(function () {
    $('#summernote').summernote({
        height: 300,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true                  // set focus to editable area after initializing summernote
    });
});