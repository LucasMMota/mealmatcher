$(document).ready(function () {
    $('select').material_select();

    /*$("#comentario").focusout(function () {
     $("#comentario_daGambi").val($("#comentario").val());
     });*/
});

function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds) {
            break;
        }
    }
}

function valida() {
    if (match.prato.value == '' || match.bebida.value == '' || match.nota.value == '') {
        Materialize.toast('Preencha a bebida, prato e nota!', 4000, 'rounded');
    } else
        $.ajax({
            url: '/pessoa/novo_match',
            type: "POST",
            dataType: "JSON",
            data: $("#match").serialize(),
            success: function (dataReturn) {
                if (dataReturn.type = 'success') {
                    Materialize.toast('Match realizado com sucesso!', 2000, 'rounded', function () {
                        location.href = '/pessoa/meus_matches';
                    });
                } else {
                    Materialize.toast('Houve um erro, tente novamente!', 4000, 'rounded');
                }
            }
        });

}
/**
 * Created by Lucas on 02/06/2016.
 */
