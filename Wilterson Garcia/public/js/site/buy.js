$(document).ready(function () {

    /*
     * Processo de compra simples
    * */

    var items = [];

    $('.btn-add-to-cart').on('click', function (e) {
        e.preventDefault();
        items.push($(this).attr('id'));
        $(this).siblings('.add-cart').attr('checked', true);
    });

    $('#buy-items').on('click', function (e) {
        e.preventDefault();

        if(items.length === 0){
            swal(
                'Erro!',
                'Você precisa selecionar ao menos 1 produto para comprar!',
                'error'
            );
            return;
        }

        $.ajax({
            method: "POST",
            url: uri,
            data:{
                _token : $('#csrf_token').val(),
                ids: items
            }
        }).success(function (data) {
            if(data){
                swal({
                    title: 'Finalizada',
                    text: "Compra efetuada com sucesso!",
                    type: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                }).then(function () {
                    location.href = "/";
                });
            }
        });
    });

});