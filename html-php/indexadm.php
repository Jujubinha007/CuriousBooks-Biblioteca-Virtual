<?php 
include_once('conexao.php');
$sqlconsulta = "SELECT * FROM cad_livros";
$resultado = mysqli_query($mysqli, $sqlconsulta);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem Vindo ADM!!!</title>
    <link rel="stylesheet" href="../css/style.CSS">
    <script src="https://kit.fontawesome.com/ae3ca4976e.js"  crossorigin="anonymous"></script>
<style>

    form{
        display:flex;
        align-items:center;
        justify-content: center;
    }

    footer{
        padding: none;
    }

    #divBusca{
        background-color:#ffdead8c;
        border:none;
        border-radius:15px;
        width:100%;
        margin: 2%;
        height:3rem;
        box-shadow: 2px 9px 15px #6f6c6c;
       
    }

    #usuario{
        float:left;
        padding:0.8rem;
        font-size: 1.2rem;
        color: #302B28;
        font-weight: bold;
        font-family: georgia;
        border:none;
        background: none;
        display:flex;
        align-items:center;
    }


    #btnBusca{
        border:none;
        float:right;
        height:3rem;
        border-radius:0 10px 10px 0;
        width:70px;
        font-weight:bold;
        background:#302B28;
        color: #FFDEAD;
    }

    .content h1, .content p{
        margin-left: 2%;
    }

    .page{
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-column-gap: 2%;
        grid-row-gap: 5%;
        margin-right: 2%;
    }

    .recheio img{
        width: 100%;
        height: 80%;
    }

    .recheio{
        width: 100%;
        height: 100%;
    }

    .flex > div {
        margin: 10px;
    }

    .recheio a {
        display: flex;
        align-items: center;
        justify-content:center;
        text-decoration: none;
    }

    .btn button{
        margin-bottom: -25%;
        padding: 10px; 
        text-transform: uppercase;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        font-size: 1rem;
        font-weight: bold;
        color: #302B28;
        background: #FFDEAD; 
        font-family: georgia; 
        box-shadow: 2px 9px 15px #6b593d; 
    }

    .link-nav-arrow::after {
        color: #302B28;
    }

</style>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="../imgs/logo.png" alt="Logotipo do curiousbooks" width="50" height="40">
                <a href="indexadm.php"><h3>CURIOUSBOOKS</h3></a>
            </div>
            <a class="active" href="indexadm.php"><label>Menu</label></a>
            <a href="sobreA.html"><label>Sobre</label></a>
            <a href="contatoA.html"><label>Contato</label></a>
           
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

            <form class="search" method="POST">
                <div id="divBusca">
                    <input type="text" name="pesquisar" id="usuario" placeholder="Buscar livro..." />
                    <button id="btnBusca">Buscar</button>
                </div>
                <?php
                $pesquisar = @$_POST['pesquisar'];
                $result = "SELECT * FROM cad_livros WHERE nome LIKE '%$pesquisar%' ";
                $resultado = mysqli_query($mysqli, $result);
                
                ?>
            </form>

            <h1 class="title">Livros</h1><br>
                <p>Destaques:</p>

            <div class="page">
                <?php
                while($rows = mysqli_fetch_array($resultado)){
                    $image = $rows['image'];
                ?>
                <section class="flex">
                    <div class="recheio">
                        <img src="<?='./capas/'.$image?>">
                        <a href="inform-bookA.php?id=<?php echo $rows['id'];?>" class="btn"><br><button>Ler Agora</button></a>
                    </div>
                    </section>
                <?php } ?>

                <!--Livros -->
                <?php
                    while($dados = mysqli_fetch_array($resultado))
                        { $image = $dados['image'];
                ?>
                <section class="flex">
                    <div class="recheio">
                        <img src="<?='./capas/'.$image?>">
                        <a href="inform-bookA.php?id=<?php echo $dados['id'];?>" class="btn"><br><button>Ler Agora</button></a>
                    </div>
                </section>
                <?php } ?>
            </div>
                    <footer>
                        <h6>&copy; Copyright 2022 curiousbooks.com.br - Todos os Direitos Reservados</h6>
                    </footer>
           
        </div>    
        <script src="../js/app.js"></script>
    </div>
    
</body>
</html>