<?php
$usuario = "root";
$host = "localhost";
$senha = "usbw";
$banco = "biblioteca_tcc";

$mysqli = new mysqli($host, $usuario, $senha, $banco);
mysqli_set_charset($mysqli,'utf8');
if ($mysqli -> connect_errno) {
  echo "Falha ao conectar ao Banco de Dados:.
  (" . $mysqli -> connect_errno .")" . $mysqli -> connect_error;
}
?>
