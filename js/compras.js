function compras() {
    var dados = $('#form2').serialize();

    $.ajax({
        method: 'GET',
        url: 'compras.php',
        data: dados,

        beforeSend: function () {
            $("h6").html("Carregando...");
        }
    })
        .done(function (response) {
            var mensagem = response;

            $('#message').html(
                '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                  'Sua Compra tem um Valor Final de R$: ' + JSON.parse(mensagem) +
                  '<br>Agora você será encaminhado para o Pagamento!' +
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                  '</button>' +
                '</div>'
              );
              

            // Armazenar o valor da mensagem em um cookie
            document.cookie = "mensagem=" + encodeURIComponent(mensagem);

            setTimeout(function () {
                window.location.href = "pagamento.php";
            }, 4000);
        })
        .fail(function () {
            $('#message').html(`
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close close-alert" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Não foi possível continuar a compra! Tente novamente.
                </div>`);
        })

    return false;
}
