<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Informações Pessoais</title>
    <link rel="stylesheet" href="../css/style.CSS">
    <script src="https://kit.fontawesome.com/ae3ca4976e.js" crossorigin="anonymous"></script>
</head>
<style>
.dados{
    margin-top: -5%;
    color: #fae5c4;
    margin-left: 15%;
    
}

table{
	margin: 5%;
    background: #302B28;
    border-radius: 10px;
    padding: 3%;
    color: #fae5c4;
    opacity: 0.9;
    height: 50vh;
    padding: 5%;
}

td input{
    display: inline-block;
	color: #fae5c4;
	letter-spacing: 1px;
	line-height: 24px;
	font-size: 1.5rem;
    border: none;
    background: none;
    font-family: Georgia;
    border-bottom: 2px solid #fae5c4;
    margin-left: 5%;
    width: 40vw;
}


td label{
    color: #fae5c4;
    letter-spacing: 1px;
    line-height: 24px;
    font-size: 1.5rem;
    font-family: Georgia;
    font-weight: bold;
}

td a button{
	background-color:#fae5c4;
	color: #302B28;
	text-decoration: none;
	border: none;
	font-family: Georgia;
    font-weight: bold;
	padding: 13px 30px;
	border-radius: 5px;
	transition: .4s; 
	text-transform: uppercase;
    float: right; 
    margin-right: -280%;
    cursor: pointer;
    
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
            $id=$_GET['idperf'];
            include_once('conexao.php');
            $sqlconsulta = "SELECT * FROM cad_usuario where id=$id";
            $resultado = mysqli_query($mysqli, $sqlconsulta);
            $dados = mysqli_fetch_assoc($resultado);
            ?>

                <form action="update.php" name="info-book" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                    <section class="dados">
                            <table>
                                    <tr>
                                        <td><label>Nome do Usuário: </label></td>
                                        <td><input type="text" name="nome" value="<?php echo $dados['nome']; ?>"></td>
                                   </tr>
                                        <br>

                                    <tr>
                                        <td><label>E-mail: </label></td>
                                        <td><input type="text" name="email" value="<?php echo $dados['email']; ?>" ></td>
                                    </tr>
                                        <br>

                                    <tr>
                                        <td><label>Celular: </label></td>
                                        <td><input type="text" name="fone" value="<?php echo $dados['telefone']; ?>"></td>
                                    <tr>
                                        <br>

                                    <tr>
                                        <td><label>Senha:</label></td>
                                        <td><input type="password" name="senha" value="<?php echo $dados['senha']; ?>" ></td>
                                    <tr>
                                        <br>
                            

                                <tr>
                                    <td><a><button type="submit"  name="atualizar">Alterar</button></a></td>
                                </tr>
                            </table>
                    </section> 
                </form>
            </div>
        </div>
                
        <footer>
            <h6>&copy; Copyright 2022 curiousbooks.com.br - Todos os Direitos Reservados</h6>
        </footer>
    </div>
</body>
</html>