<?php 
include_once('conexao.php');
$sqlconsulta = "SELECT * FROM cad_livros";
$resultado = mysqli_query($mysqli, $sqlconsulta);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    while($dados = mysqli_fetch_assoc($resultado))
    {
    ?>
    <a href="inform-book.php?id=<?php echo $dados["id"];?>"><?php echo $dados["nome"];?></a>
    <br>
    <?php
    }
    ?>
</body>
</html>