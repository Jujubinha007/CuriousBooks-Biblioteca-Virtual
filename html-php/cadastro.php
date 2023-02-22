<?php 
session_start();
include_once('conexao.php');

$nome = mysqli_escape_string($mysqli, $_POST["nome"]);
$email = mysqli_escape_string($mysqli, $_POST["email"]);
$fone = mysqli_escape_string($mysqli, $_POST["fone"]);
$senha = mysqli_escape_string($mysqli, $_POST["senha"]);
//$admin1 = mysqli_escape_string($mysqli, $_POST["admin1"]);
//$admin2 = 0;

$teste=true;
if (strlen($nome)==0) {
    $teste=false;
}
if (strlen($email)==0) {
    $teste=false;
}
if (strlen($fone)==0) {
    $teste=false;
}
if (strlen($senha)==0) {
    $teste=false;
}

if ($teste==true) {
    

$sqlinsert = "INSERT INTO cad_usuario (nome, email, telefone, senha)
VALUES ('$nome', '$email', '$fone', '$senha')";

$result = mysqli_query($mysqli, $sqlinsert);
if (!$result) 
{
    die('Falha ao cadastrar usuário: ' . mysqli_error($mysqli));  
} else    {

    echo "<script>alert('Usuário Cadastrado com Sucesso!!!'); window.location='login.html';</script>";
} 
    mysqli_close($mysqli);
}
else{

    $_SESSION['nome']=$nome;
    $_SESSION['email']=$email;
    $_SESSION['fone']=$fone;
    $_SESSION['senha']=$senha;
    $_SESSION['id']=$id;
  header("location: cadastrar.php?Erro");
  }

?>