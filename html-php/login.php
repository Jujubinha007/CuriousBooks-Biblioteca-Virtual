<?php
	require_once('conexao.php');

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

	$sqlstring = "SELECT * FROM cad_usuario WHERE nome = '$nome' and senha='$senha'";

	$resultado = mysqli_query($mysqli, $sqlstring);

	if (!$resultado)
    {
        die('<b>Registro Inválida: </b>' . mysqli_error($mysql));}

    $registro = mysqli_num_rows($resultado);	

	if($registro!=1){
		
        header("location:###.php");
	}
	else
	{
		$dados = mysqli_fetch_array($resultado);	
		session_start();
		$_SESSION['id'] = $dados['id'];
        $_SESSION['email'] = $dados['email'];
		$_SESSION['nome'] = $dados['nome'];	


        if($dados['admin2'] == 1) 
            header("location:indexadm.php");
        else
    		header("location:meuperf.php");
	}
?>