require('./bootstrap');

$(document).ready(function () {

    $('.limpar').click(function () {
        $("#dadosCalculo").text('')
    });

    $('.number').click(function () {
        // var op = $("#dadosCalculo").text().trim();
        var entrada = $(this);

        if ($("#operador").text().length > 0) {

            if (entrada.hasClass("operador")) {

                // console.log($("#dadosCalculo").text().substr($("#operador").text().length - 1));
                // var lastChar = $("#operador").text().substr($("#operador").text().length - 1);
                // console.log('lastChar', lastChar)
                // //If lastChar is a Operation Symbol, change the operation
                // if (isNaN(lastChar) == true) {
                //     //Substitute the operator symbol by the "new" operator cymbol clicked
                //     var operation = $("#operador").text().substr(0, $("#operador").text().length - 1);
                //     // $("#operador").html(operation);
                //     console.log(operation);
                //     // $("#operation").val(operation);

                // }

                // if ($(this).hasClass("operador")) {

                //     let val = $("#dadosCalculo").text().trim().length;

                //     console.log(lastChar);
                //     //If lastChar is a Operation Symbol, change the operation
                //     if (isNaN(lastChar)) {
                //         //Substitute the operator symbol by the "new" operator cymbol clicked
                //         var operation = $("#dadosCalculo").text().substr(0, $("#screen").text().length - 1);
                //         $("#dadosCalculo").html(operation);
                //         $("#dadosCalculo").val(operation);

                //     }
                // }
            }



        } else {
            $("#dadosCalculo").append(entrada.val());
        }

    });

    $('#calcular').click(function () {
        const result = window.axios({
            method: 'post',
            url: '/',
            data: { data: $("#dadosCalculo").text().trim() }
        });
        console.log('result', result);
    })
});
