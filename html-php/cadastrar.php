<?php
session_start();
if (isset($_REQUEST['Erro'])) {
    
$nome=$_SESSION['nome'];
$email=$_SESSION['email'];
$fone=$_SESSION['telefone'];
$senha=$_SESSION['senha'];
echo "<script>alert('Preencha todos os campos!!!'); window.location='cadastrar.php';</script>";

} else{
$nome='';
$email='';
$fone='';
$senha='';

}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../css/cadastrar.css">
</head>
<body bgcolor="#302B28">
<div class="corpo">
  <div id="main-container">
    <a href="login.html" id="voltar">X</a>
          <h1>Cadastre-se para acessar o sistema</h1>
          <form name="login" action="cadastro.php" method="POST">

            <div class="full-box">
              <label for="name">Nome Completo</label>
              <input type="text" name="nome" value="<?php  echo $nome;?>" id="name" placeholder="Digite seu nome"  data-required data-min-length="3" data-max-length="20">
            </div>

            <div class="full-box">
              <label for="email">E-mail</label>
              <input type="email" name="email" value="<?php  echo $email;?>" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
            </div>

            <div class="full-box">
              <label for="fone">Celular</label>
              <input type="number" name="fone" value="<?php  echo $fone;?>" id="fone" placeholder="(00) 0000-00000" data-required data-only-letters>
            </div>

            <div class="half-box spacing">
              <label for="senha">Senha</label>
              <input type="password" name="senha" value="<?php  echo $senha;?>" id="senha" placeholder="Digite sua senha" data-password-validate data-required>
            </div>

            <div class="full-box">
              <input id="btn-submit" type="submit" value="CADASTRAR">
              <!-- só coloquei pra ficar mais facil --> 
            </div>
          </form>
  </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

</div>
</body>
</html>