var ConsultarCep = (function($) {
    
    var $form,
        $cep;

    var handlerKeyEnter = function(event) {
        if (event.keyCode == 13) {
            if ($cep.val().length == 9) {
                $form.find('#consultar-cep').trigger('click');
            }
            return false;
        }
    };

    var handlerConsultZipcode = function (event) {
        if ($cep.val().length != 9)
            return;
        
        $.ajax({
            type: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            url: '/consultar-cep',
            dataType: 'json',
            data: $.param({cep: $cep.val(), _token: $('input:hidden').val()})
        })
        .done(function(data) {
            var cardText = $('.card');

            cardText.find('#end').text(data.end);
            cardText.find('#bairro').text(data.bairro);
            cardText.find('#cidade').text(data.cidade + ' - ' + data.uf);
            cardText.find('#cep').text(data.cep.replace(/(^\d{5})(\d{3}$)/, '$1-$2'));
            cardText.find('#comple').text((data.complemento2 ? data.complemento2.replace(/^[\s-]*/, '') : ''));
            cardText.show();
        })
        .fail(function(jqXHR) {
            console.log(jqXHR.responseJSON);
        });
    };
    
    var init = function() {
        $form = $('form');
        $cep = $('#txtCep');

        $cep.mask('00000-000');

        $form
            .on('keydown', '#txtCep', handlerKeyEnter)
            .on('click', '#consultar-cep', handlerConsultZipcode);
    };

    return {
        init: init
    };

})(jQuery);
