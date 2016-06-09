$(document).ready(function () {
    $('select').material_select();
    /*$('.tabs-wrapper .row').pushpin({
     top'.tabs-wrapper').offset().top
     });*/
});

function joia(id) {
    $.ajax({
        url: "/matches/curtir/",
        type: "POST",
        dataType: "JSON",
        data: {com_id: id},
        success: function (dataReturn) {
            //marcada joiado
            if (dataReturn.type == 'success') {
                Materialize.toast('Você curtiu esse Match!', 2000, 'rounded');
            }
            //msg status
        }
    });
}