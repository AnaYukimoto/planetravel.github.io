<?php //após pegar os dados do logar.js ele vai fazer um tratamento de erro para o login que deve ser igual ao do banco de dados que foi pré definido

$login = $_GET["login"];
$senha = $_GET["senha"];

$loginBD ="exemplo@gmail.com";
$senhaBD ="123";

$secerto = "1";
$seerrado = "2";

if($login==$loginBD && $senha==$senhaBD)
{
    echo $secerto;
}
else
{
    echo $seerrado;
}


