<?php
include_once('conexao.php');
$idperf = mysqli_escape_string($mysqli, $_POST['id']);
$nome = mysqli_escape_string($mysqli, $_POST['nome']);
$email = mysqli_escape_string($mysqli, $_POST['email']);
$fone = mysqli_escape_string($mysqli, $_POST['fone']);
$senha = mysqli_escape_string($mysqli, $_POST['senha']);

//criando a linha de UPDATE
$sqlupdate = "UPDATE cad_usuario SET  nome = '$nome', email = '$email', telefone = '$fone',  senha ='$senha' WHERE id = '$idperf' ";

$resultado = mysqli_query($mysqli, $sqlupdate);

$resp = "Perfil atualizado com sucesso!";
$respE = ('Atualização Inválida: '. mysqli_error($mysqli));

if (!$resultado){
	die ('<script>alert("'. $respE.'"); </script>');
}else{
	echo "<script>alert('Perfil Alterado Com Sucesso!!!'); window.location='meuperf.php';</script>";
}
//echo $sqlupdate;
mysqli_close($mysqli);

?>