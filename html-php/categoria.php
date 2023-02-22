<?php
include_once('conexao.php');
$categ = @mysqli_escape_string($mysqli, $_POST["categ"]);


$sqlinsert = "INSERT INTO categ_livro (tipo_categ)
VALUES ('$categ')";

$result = @mysqli_query($mysqli, $sqlinsert);
if (!$result) 
{
    
    die('Falha ao cadastrar livro: ' . @mysqli_error($mysqli));  
    
} else    {
    //novamente só coloquei pra ficar mais facil de voltar
    echo "<script>alert('Categoria registrada com Sucesso!!!'); window.location='categoria.html'; </script>";
    
} 
mysqli_close($mysqli);




?>