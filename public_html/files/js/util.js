function showNotify(text, timeout, layout, type, redirect) {

    timeout = timeout || 2000;
    layout = layout || 'center';
    redirect = redirect || null;

    var noty_id = noty({
        text: text,
        layout: layout,
        theme: 'defaultTheme',
        type: type,
        dismissQueue: true, // If you want to use queue feature set this true
        template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
        animation: {
            open: {
                height: 'toggle'
            },
            close: {
                height: 'toggle'
            },
            easing: 'swing',
            speed: 500 // opening & closing animation speed
        },
        timeout: timeout, // delay for closing event. Set false for sticky notifications
        force: false, // adds notification to the beginning of queue when set to true
        modal: false,
        closeWith: ['button'], // ['click', 'button', 'hover']
        callback: {
            onClose: function () {
                if (redirect != null)
                    window.location = redirect;
            }
        }
    })
}

function showConfirmDialog(text, layout, action_function, id_element) {

    noty({
        text: text,
        layout: layout,
        theme: 'defaultTheme',
        type: 'Confirm',
        dismissQueue: false, // If you want to use queue feature set this true
        template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
        animation: {
            open: {
                height: 'toggle'
            },
            close: {
                height: 'toggle'
            },
            easing: 'swing',
            speed: 500 // opening & closing animation speed
        },
        buttons: [
            {
                addClass: 'btn btn-primary',
                text: 'Confirmar',
                onClick: function ($noty) {
                    $noty.close();
                    eval(action_function + '(' + id_element + ')');
                }
            },
            {
                addClass: 'btn btn-danger',
                text: 'Cancelar',
                onClick: function ($noty) {
                    $noty.close();
                }
            }
        ]
    });
}

function showModalConfirmation(message, title, width, height, text_buttom, action_function, id_element) {

    $('#dialog-modal').attr('title', title);
    $('#dialog-modal p').html(message);
    $('#dialog-modal').dialog({
        resizable: false,
        width: width,
        height: height,
        modal: true,
        close: function () {
            $('#dialog-modal p').html('');
        }
    });
    $('#dialog-modal').dialog("option", "buttons", [{
        text: "Cancelar",
        click: function () {
            $(this).dialog("close");
        }
    }, {
        text: text_buttom,
        click: function () {
            $(this).dialog("close");
            eval(action_function + '(' + id_element + ')')
        }
    }]);
}

function showModalForm(form, title, width, height) {
    $('#dialog-modal').attr('title', title);
    $('#dialog-modal p').html(form);
    $('#dialog-modal').dialog({
        resizable: false,
        width: width,
        height: height,
        modal: true,
        close: function () {
            $('#dialog-modal p').html('');
        }
    });
}

function validaCnpj(cnpj) {
    var valida = new Array(6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2);
    var dig1 = new Number;
    var dig2 = new Number;

    exp = /\.|\-|\//g
    cnpj = cnpj.toString().replace(exp, "");
    var digito = new Number(eval(cnpj.charAt(12) + cnpj.charAt(13)));

    for (i = 0; i < valida.length; i++) {
        dig1 += (i > 0 ? (cnpj.charAt(i - 1) * valida[i]) : 0);
        dig2 += cnpj.charAt(i) * valida[i];
    }
    dig1 = (((dig1 % 11) < 2) ? 0 : (11 - (dig1 % 11)));
    dig2 = (((dig2 % 11) < 2) ? 0 : (11 - (dig2 % 11)));

    if (((dig1 * 10) + dig2) != digito)
        return false;
    else
        return true;
}


function validaCPF(cpf) {

    cpf = cpf.replace(/[^\d]+/g, '');

    if (cpf == '')
        return false;

    // Elimina CPFs invalidos conhecidos
    if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999")
        return false;

    // Valida 1o digito
    add = 0;
    for (i = 0; i < 9; i++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;

    // Valida 2o digito
    add = 0;
    for (i = 0; i < 10; i++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;

    return true;

}

function validaEmail(email) {
    er = /^[a-zA-Z0-9][a-zA-Z0-9\.\-_-a]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
    if (er.exec(email))
        return true;
    else
        return false;
}