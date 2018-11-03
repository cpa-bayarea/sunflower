$('.userDelete').on('click',function () {

    let element = $(this);

    console.log($('base[id="base"]').attr('content') + '/delete');

    console.log(element.data('pedido'));

    $.ajax({
        url:$('base[id="base"]').attr('content') + '/usuarios/' + element.data('pedido'),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'DELETE',

        data:{
        },

        dataType: "json",
        success:function (data) {
            console.log(data);

            let status = false;
            let title = false;

            if (data == true) {
                status = 'success';
                title = 'DELETADO COM SUCESSO';
            }

            else {
                status = 'danger';
                title = 'ERRO AO DELETAR ESTE PEDIDO!';
            }

            swal({
                title: title,
                type: status,
            }).then(okay => {
                if (okay) {
                    window.location.href = $('base[id="base"]').attr('content') + '/pedidos';
                }
            });

        },

        error: function (data) {
            console.log(data);
        }
    });
});