require('./bootstrap');

$(document).ready(function () {
    const operadores = ['+', '-', '*', '/', '%'];

    $('.limpar').click(function () {
        $("#dadosCalculo").text('')
    });

    $('.number').click(function () {

        var entrada = $(this);

        if ($("#dadosCalculo").text().trim().length > 0) {

            if (entrada.hasClass("operador")) {
                var ultimoDadoInserido = $("#dadosCalculo").text().trim().substr($("#dadosCalculo").text().trim().length - 1, 1);

                if (inArray(ultimoDadoInserido, operadores)) {
                    $("#dadosCalculo").html($("#dadosCalculo").text().trim().substring(0, $("#dadosCalculo").text().trim().length - 1));
                }

            }

        }
        $("#dadosCalculo").append(entrada.val());

    });

    $('#calcular').click(function () {

        var expresso = $("#dadosCalculo").text().trim();
        $("#dadosCalculo").html('calculando...');
        window.axios({
            method: 'post',
            url: '/',
            data: {
                data: expresso
            }
        }).then(function (response) {
            if (response.status == 201) {
                $("#dadosCalculo").html(response.data.data.registro.result);

                if (response.data.data.registro.bonus == 1) {
                    $("#componetBonus").css('display', 'block');
                }
            }
            if (response.status == 200) {
                $("#dadosCalculo").html(response.data.message);
            }
        }).catch(function (error) {
            console.log('error', error);
        });

    })

    function inArray(needle, haystack) {
        var length = haystack.length;
        for (var i = 0; i < length; i++) {
            if (haystack[i] == needle) return true;
        }
        return false;
    }
});
