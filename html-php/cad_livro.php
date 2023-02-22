<?php
include_once('conexao.php');
$nome = @mysqli_escape_string($mysqli, $_POST['nome']);
$titulo = @mysqli_escape_string($mysqli, $_POST['titulo']);
$autor = @mysqli_escape_string($mysqli, $_POST['autor']);
$categ = @mysqli_escape_string($mysqli, $_POST['select_categoria']);
$idio = @mysqli_escape_string($mysqli, $_POST['idio']);
$pag = @mysqli_escape_string($mysqli, $_POST['pag']);
$data = @mysqli_escape_string($mysqli, $_POST['data']);
$edi = @mysqli_escape_string($mysqli, $_POST['edi']);
$descr = @mysqli_escape_string($mysqli, $_POST['descr']);

//imagem
$image_name = @$_FILES['image']['name'];
$image = @$_FILES['image']['tmp_name'];

$location = 'C:/wamp64/www/Biblioteca/html-php/capas/'.$image_name;
@move_uploaded_file($image, $location);

//livro
$livro_name = @$_FILES['livro']['name'];
$livro = @$_FILES['livro']['tmp_name'];

$locationl = 'C:/wamp64/www/Biblioteca/html-php/livro/'.$livro_name;
@move_uploaded_file($livro, $locationl);

$sqlinsert = "INSERT INTO cad_livros (nome, titulo, autor, FK_categ, idio, pag, data, edi, descr, image, livro)
VALUES ('$nome', '$titulo','$autor' , '$categ', '$idio', '$pag', '$data', '$edi', '$descr', '$image_name', '$livro_name')";

$result = @mysqli_query($mysqli, $sqlinsert);
if (!$result) 
{
    
    die('Falha ao cadastrar livro: ' . @mysqli_error($mysqli));  
    
} else    {
    //novamente só coloquei pra ficar mais facil de voltar
    echo "<script>alert('Livro Cadastrado com Sucesso!!!'); window.location='cad_livro2.php'</script>";
} 
mysqli_close($mysqli);

?>