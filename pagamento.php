<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/pagamento.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="js/pagamento.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
    <!--COMEÇO DA NAV-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" width="50px" height="50px" alt="">
        </a>
        <a class="navbar-brand" href="index.html" style="font-family:fantasy; font-size: 23px;">Plane Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="pacotes.html">Pacotes</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" href="pagamento.html"><span class="sr-only">(página
                            atual)</span>Pagamento</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" href="index.html"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
    <!--FINAL DA NAV-->

    <div id="message"></div><!--ALERT DE PAGAMENTO-->

    <!--FORMULÁRIOS DE PAGAMENTO-->
    <div class="containerr">
      
        <h3>Selecione a Forma de Pagamento:</h3>
        <label for="mensagem">Valor a ser Pago em R$: </label>
        <b><span id="mensagem"> <?php
            $mensagem = isset($_COOKIE['mensagem']) ? $_COOKIE['mensagem'] : 'Valor do Pagamento não definido, por favor volte para a página Pacotes!';
            echo str_replace('"', '', $mensagem);
            ?>
        </span></b>
        <br>

        <!--FORM DO PAGAMENTO EM CARTÃO-->
        <div class="form-check">
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" id="mostrarCartao" onclick="mostrarCartao()" class="custom-control-input">
                <label for="mostrarCartao" class="custom-control-label">Cartão</label>
            </div>
        </div>
        <br>

        <form style="display: none;" id="formCartao" class="form1 ">
            <div class="form-group">
                <label>Nome do Titular *</label>
                <input type="text" class="form-control" id="nomeTitular" placeholder="NOME" required>
            </div>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="">Número do Cartão *</label>
                    <input type="text" class="form-control" id="numeroCartao" placeholder="0000 0000 0000 0000" maxlength="16" minlength="16" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEstado">Quantidade de Parcelas *</label>
                    <select id="inputEstado" class="form-control">
                        <option selected value="1">Á Vista</option>
                        <option value="2">2x</option>
                        <option value="3">3x</option>
                        <option value="4">4x</option>
                        <option value="5">5x</option>
                        <option value="6">6x</option>
                        <option value="7">7x</option>
                        <option value="8">8x</option>
                        <option value="9">9x</option>
                        <option value="10">10x</option>
                        <option value="11">11x</option>
                        <option value="12">12x</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Data de Vencimento *</label>
                    <input type="text" class="form-control" id="validadeCartao" placeholder="MM/AA" maxlength="7" minlength="7" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Códido de Segurança *</label>
                    <input type="text" class="form-control" id="codigoSeguranca" placeholder="CVC" maxlength="5" minlength="3" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#Modal" id="botaoCartao" >Realizar Pagamento</button>

        </form>

        <!--FORM DO PAGAMENTO EM PIX-->
        <div class="form-check">
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" id="mostrarPix" onclick="mostrarPix()" class="custom-control-input">
                <label for="mostrarPix" class="custom-control-label">Pix</label>
            </div>
        </div>
        
        <div class="form2">
            <div class="form-group d-flex justify-content-center">
                <div style="display: none;" id="formPix" class="form2">
                    <center>
                        <label>Faça a Leitura do <b>QRCode</b> pelo Celular:</label>
                        <br>

                        <img src="img/qrcode.png" width="250px" height="250px">
                        <br><br>

                        <label><b>Ou realize o PIX manualmente:</b></p>

                        <label style="text-align: left;" id="texto"> <b>Nome:</b> Nome da Dona da
                            Conta </br>
                            <b>CNPJ:</b> 00.000.000/0000-00 </br>
                            <b>Banco:</b> Nome do Banco </br> <b>Agência:</b> 0000 </br> <b>Conta:</b> 0000 0000
                            0000 0000
                            <i id="icone-copiar" class="far fa-copy" onclick="copiarTexto('0000 0000 0000 0000')"
                                style="cursor: pointer;"></i>
                        </label>
                        </center>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#Modal">Pagamento Realizado</button>
                </div>
            </div>
        </div>


        <!-- MODAL -->
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Pagamento Realizado com Sucesso!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        Sua compra é muito importante para nós e estamos felizes por você ter escolhido nossos serviços. 
        </br>Esperamos que ele atenda plenamente às suas expectativas. Visto que valorizamos você como cliente e esperamos tê-lo novamente em breve.
        </br>Plane Travel te deseja uma Boa Viagem ✈️
      </div>
      <div class="modal-footer">
        <a href="index.html"><button type="button" class="btn btn-primary">Partiu Viajar ✈️</button></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>