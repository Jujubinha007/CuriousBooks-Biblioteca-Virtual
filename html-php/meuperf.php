<?php 
session_start();
$id = @$_SESSION['id'];
include_once('conexao.php');
$consulta = "SELECT * FROM cad_usuario where id='$id'";
$resultado = @mysqli_query($mysqli, $consulta);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informações Pessoais</title>
    <link rel="stylesheet" href="../css/style.CSS">
    <script src="https://kit.fontawesome.com/ae3ca4976e.js" crossorigin="anonymous"></script>
</head>
<style>
.dados{
	width: 100%;
    color: #fae5c4;
}

.dados-text{
    margin: 5%;
    background: #fae5c4;
    border-radius: 10px;
    padding: 3%;
    padding-left: 25%;
    color: #fae5c4;
    opacity: 0.9;
    box-shadow: 0px 10px 40px #00000056;
    
}

.dados-text input{
	color: #302B28;
	letter-spacing: 1px;
	line-height: 24px;
	font-size: 1.5rem;
    width: 100%;
    max-width: 60%;
    border: none;
    background: none;
    font-family: Georgia;
    
}

.dados-text label{
    color: #302B28;
    letter-spacing: 1px;
    line-height: 24px;
    font-size: 1.5rem;
    font-family: Georgia;
    font-weight: bold;
    margin-left: 5%;
}

.dados-text label h1{
    color: #302B28;
    letter-spacing: 1px;
    line-height: 24px;
    font-size: 2rem;
    font-family: Georgia;
    font-weight: bold;
    margin-left: 5%;
}

.dados-text a button{
    background-color:#302B28;
	color: #fae5c4;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 13px 30px;
	border-radius: 5px;
	transition: .4s; 
	text-transform: uppercase;
    cursor: pointer;
}

 button a{
    background-color:#302B28;
	color: #fae5c4;
	text-decoration: none;
    border:none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 13px 30px;
	border-radius: 5px;
	transition: .4s; 
	text-transform: uppercase;
    cursor: pointer;
}

button:nth-child(1){
    margin-left: 5%;
}

</style>
<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="../imgs/logo.png" alt="Logotipo do curiousbooks" width="50" height="40">
                <a href="index.php"><h3>CURIOUSBOOKS</h3></a>
            </div>
            <a class="active" href="index.php"><label>Menu</label></a>
            <a href="sobre.html"><label>Sobre</label></a>
            <a href="contato.html"><label>Contato</label></a>
           
            <div class="icon-menu">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line class="firstline" x1="0" y1="5" x2="37" y2="5" stroke="#FFDEAD"/>
                    <line class="secondline" y1="15" x2="30" y2="15" stroke="#FFDEAD"/>
                    <line class="thirdline" y1="25" x2="37" y2="25" stroke="#FFDEAD"/>
                </svg>

            </div>
        </header><!-- Fim header -->
        <div class="menu">
            <nav class="navigation-menu">
                <br>
                <ul class="list-nav-second ">
                    <div class="link-nav-arrow">
                        <li class="item-nav">
                            <a class="link-nav" href="meuperf.php">
                            <i class="fas fa-book icon"></i>
                                Meu Perfil
                            </a>
                        </li>

                        <li class="item-nav">
                            <a class="link-nav" href="cad_livro2.php">
                            <i class="fa-solid fa-plus icon"></i>
                                Livro
                            </a>
                        </li>

                        <li class="item-nav">
                            <a class="link-nav" href="categoria.html">
                            <i class="fa-solid fa-plus icon"></i>
                                Categoria
                            </a>
                        </li>

                        <li class="item-nav">
                            <a class="link-nav" href="sair.php">
                            <i class="fa-sharp fa-solid fa-circle-xmark icon"></i>
                                Sair
                            </a>
                        </li>
                        <br><br>
                    </div>
                </ul>
            </nav>
        </div>

    <div class="content">
        <div class="page">
                <!--linha 1-->

                    <?php
                    $id = @$_SESSION['id'];
                    include_once('conexao.php');
                    $consulta = "SELECT * FROM cad_usuario WHERE id = '$id'";
                    $resultado = @mysqli_query($mysqli, $consulta);
                    while ($dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC))
                    {	
                    ?>

                <form action="biblio.php" name="info-book">
                    <section class="dados">
                        <div class="dados-text">
                            <div class="full-box">
                                <label><h1><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg> INFORMAÇÕES PESSOAIS</h1>
                                </label>
                            </div>
                            <br>
                            <br>

                            <div class="full-box">
                                <label>Nome do Usuário: </label>
                                <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" readonly>
                                <input type="hidden" name="idperf" value="<?php  echo $dados['id']; ?>"> 
                            </div>
                            <br>

                            <div class="half-box spacing">
                                <label>E-mail: </label>
                                <input type="text" name="email" value="<?php echo $dados['email']; ?>" readonly>
                            </div>
                            <br>

                            <div class="half-box spacing">
                                <label>Celular: </label>
                                <input type="text" name="fone" value="<?php echo $dados['telefone']; ?>" readonly>
                            </div>
                            <br>

                            <div class="half-box">
                                <label>Senha:</label>
                                <input type="password" name="senha" value="<?php echo $dados['senha']; ?>" readonly>
                            </div>
                            <br>

                            <a href="biblio.php?id=<?php echo $dados['id'];?>"><button class="button" type="submit">Alterar</button></a>
                            <button><a href="excluirP.php?id=<?php echo $dados['id'];?>">Excluir</a></button>

                        
                        </div>
                    </section> 
                </form>
                <?php } ?>
            </div>
        </div>
                
        <footer>
            <h6>&copy; Copyright 2022 curiousbooks.com.br - Todos os Direitos Reservados</h6>
        </footer>
    </div>
</body>
</html>