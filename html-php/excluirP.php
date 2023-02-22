<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Excluir Perfil</title>
    <link rel="stylesheet" href="../css/style.CSS">
    <script src="https://kit.fontawesome.com/ae3ca4976e.js" crossorigin="anonymous"></script>
<style>
.logo a{
    max-width: 100%;
    color: #FFDEAD;
    display: flex;
    align-items: left;
    font-family: Georgia;
    text-align: left;
    font-size: medium;
    margin-left: 5%;
}

/* form */
#main-container {
    margin-top: 10%;
  width: 60%;
  height: 100%;
  margin-left: auto;
  margin-right: auto;
  background-color: #7c0a02;
  border-radius: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding: 3%;
  box-shadow: 5px 5px 15px 3px #494949;
}

#main-container h1 {
  text-align: center;
  margin-bottom: 25px;
  font-size: 1.6rem;
  color: #fae5c4;
}

form {
  display: flex;
}   

.container {
    overflow: visible;
}

button{
    display: flex;
	background-color:#302B28;
	color: #FFDEAD;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 15px;
    width: 10vw;
	border-radius: 5px;
	transition: .4s; 
	text-transform: uppercase;
    cursor: pointer;
    margin-left: 5%;
    font-size: 1rem;
  
}

button:nth-child(1){
	margin-left: 0;
}

button:nth-child(2){
	margin-left: 1.5em;
}


footer {
    background: #302B28;
    width: 100%;
    height: 5%;
    position: fixed;
    bottom: 0px;
    color: #FFDEAD;
    font-size: 1.5rem;
    text-align: center;
    border: none;
    font-family: Georgia;
    display: flex;
    align-items: center;
    justify-content: center;
}

@media screen and (max-width: 720px) {
    footer {
        width: 100%;
        height: 2%;
        position: absolute;
        bottom: 0px;
        font-size: medium;
        background: #302b28dc;
        
    }

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
  </header>
  <!-- Fim header -->

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
 
    <?php
    $id=$_GET['id'];
    ?>

    <br>
    <div id="main-container">
        <h1><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
            </svg> Deseja Excluir Permanentemente Seu Perfil?
        </h1>
            
        <form id="register-form" action="deleteP.php" method="POST">
            <input type="hidden" name="id" value="<?php  echo $id; ?>">
                <button type="submit" name="confirma" value="SIM"><i class="fa-solid fa-check icon"></i> SIM
                </button>

                <button type="reset" class="#" name="negar" onclick="window.location='meuperf.php';">
                <i class="fa-solid fa-x icon"></i>
                 NÃO
                </button>
        </form>
    </div>

    <footer>
        <h6>&copy; Copyright 2022 curiousbooks.com.br - Todos os Direitos Reservados</h6>
    </footer>
</div>

</body>
</html>