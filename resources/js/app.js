require('./bootstrap');

$(document).ready(function () {

    $('.limpar').click(function () {
        $("#dadosCalculo").text('')
    });

    $('.number').click(function () {
        // var op = $("#dadosCalculo").text().trim();
        var entrada = $(this);
        var expressao = $("#dadosCalculo").text().trim();

        if ($("#operador").text().length > 0) {

            if (entrada.hasClass("operador")) {

            }

        }

        $("#dadosCalculo").append(entrada.val());


        console.log('last', $("#dadosCalculo").text().trim().slice());


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
            }
            if (response.status == 200) {
                $("#dadosCalculo").html(response.data.message);
            }
        }).catch(function (error) {
            console.log('error', error);
        });

    })
});
