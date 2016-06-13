$(document).ready(function () {
    $('select').material_select();
    /*$('.tabs-wrapper .row').pushpin({
     top'.tabs-wrapper').offset().top
     });*/
    $(".btn-curtir-span").on('click', function () {
        joia($(this).attr('rel'), $(this));
    })
});

function joia(id, span) {
    if (!span.hasClass('curtiu'))
        $.ajax({
            url: "/matches/curtir/",
            type: "POST",
            dataType: "JSON",
            data: {com_id: id},
            success: function (dataReturn) {
                //marcada joiado
                if (dataReturn.type == 'success') {
                    Materialize.toast('Curtiu!', 2000, 'rounded');
                    span.addClass("curtiu");
                }
                //msg status
            }
        });
    else
        Materialize.toast('Você já curtiu esse Match!', 2000, 'rounded');
}