function enviarSugestao() {
    if ($("#prato").val() == '' && $("#bebida").val() == '') {
        Materialize.toast('Insira pelo menos um dos campos!', 4000, 'rounded');
    } else {
        $.ajax({
            url: '/pessoa/sugerir',
            type: "POST",
            dataType: "JSON",
            data: {bebida: $("#bebida").val(), comida: $("#prato").val()},
            success: function (dataReturn) {
                if (dataReturn.type == 'success')
                    Materialize.toast('Sugestão enviada com sucesso!', 1500, 'rounded', function () {
                        window.location = '/pessoa/minhas_sugestoes'
                    });
                else
                    Materialize.toast('Erro! Tente novamente!', 2000, 'rounded',function () {
                        window.location = '/pessoa/sugerir'
                    });
            }
        });
    }
}