<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deletar Livro</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"> 
	<meta charset="utf-8"/>
</head>
<body>
<?php 
$id = $_POST['id'];
$opc = $_POST['confirma'];
include_once ('conexao.php');
$sqldelete = "DELETE FROM cad_livros WHERE id='$id'";
if ($opc == "SIM") 
{
	mysqli_query($mysqli, $sqldelete) or die ("Erro de exclusão");
	mysqli_close($mysqli);
	header('Location: indexadm.php');
}
else
{
	header('Location: indexadm.php');
}
// echo $sqldelete;
?>
	
</body>
</html>