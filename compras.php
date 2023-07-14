<?php

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$valor3 = $_GET['valor3'];

$qtde1 = $_GET['qtde1'];
$qtde2 = $_GET['qtde2'];
$qtde3 = $_GET['qtde3'];

$valorfinal = ($valor1 * $qtde1) + ($valor2 * $qtde2) + ($valor3 * $qtde3);

$mensagem = number_format($valorfinal, 2, ',', '.');

echo json_encode($mensagem);

