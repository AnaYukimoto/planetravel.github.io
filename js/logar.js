function loginefetuado() {

    var dados = $('#formul').serialize();

    $.ajax({
        method: 'GET',
        url: 'logar.php',
        data: dados,
        beforeSend: function () {
            $("h6").html("Carregando...");
        }
    })
        .done(function (retorno) {
            if (retorno == 1) {
                $('#message').html(`
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close close-alert" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            Login efetuado com Sucesso! Seja Bem-Vindo!✈️
                        </div>`);
                setTimeout(function () {
                    window.location.href = "pacotes.html";
                }, 4000); // Atraso de 4 segundos (4000 milissegundos)
            } else if (retorno == 2) {
                $('#message').html(`
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close close-alert" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            Login ou Senha Inválidos! Tente novamente.
                        </div>`);
            }
        })
        .fail(function () {
            alert("Falha na inclusão.");
        });

}
