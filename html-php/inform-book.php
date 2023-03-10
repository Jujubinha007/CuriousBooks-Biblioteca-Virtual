<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Livro</title>
    <link rel="stylesheet" href="../css/style.CSS">
    <script src="https://kit.fontawesome.com/ae3ca4976e.js" crossorigin="anonymous"></script>
<style>
.dados{
	width: 100%;
	padding: 40px 5px;
	top: 0;
}

.dados img{
	width: 20%;

}
.dados-text{
	width: 100%;
	margin-left: 1.5em;
}
.cont{
	width: 100%;
	max-width: 90%;
	margin: 0 75px;
	display: flex;
	align-items: left;
	justify-content: space-around;
}
.dados-text h2{
	color: #302B28;
	font-size: 2rem;
	text-transform: capitalize;
	margin-bottom: 2%;
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
}
button{
	background-color:#302B28;
	color: #FFDEAD;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 13px 30px;
	border-radius: 5px;
	transition: .4s; 
	text-transform: uppercase;
}

button:nth-child(1){
	margin-left: 0;
}

button:nth-child(2){
	margin-left: 1.5em;
}
button:hover{
	background-color: transparent;
	border: 2px solid #302B28;
	cursor: pointer;
	color: #302B28;
}

.linha{
	background: #302B28;
	height: 0.2vh;
}


.descr{
	position: relative;
	width: 100%;
	height: 300px;
	display: flex;
	align-items: left;
	justify-content: left;
  border: none;
	
}
.descr label{
	font-size: 30px;
	color: #302B28;
	font-weight: bold;
	margin-left: 5%;
}
.descr input{
	color: #302B28;
	font-size: 25px;
	margin-bottom: 2px;
	line-height: 26px;
	margin-left: 5%;
  font-size: 1.5rem;
  width: 160%;
  border: none;
  background: none;
  font-family: Georgia;
  font-weight: bold;
}

.descr textarea{
	color: #302B28;
	margin-bottom: 2px;
	line-height: 26px;
	margin-left: 5%;  
	margin-top: 2%;
	text-align: left;
  font-size: 1rem;
  width: 180%;
  border: none;
  background: none;
  font-family: Georgia;
  font-weight: bold;
  

}
</style>
</head>

<?php
$id=$_GET['id'];
include_once('conexao.php');
$sqlconsulta = "SELECT * FROM cad_livros WHERE id = '$id' ";
$resultado = mysqli_query($mysqli, $sqlconsulta);

if (!$resultado) {
    echo 'Erro';
    die('<b>Query Inv??lida:</b>' . mysqli_error($mysqli)); 
    } else {
    $num = mysqli_num_rows($resultado);
    if ($num==0){
    echo "<b>Livro n??o existe !!!!<br><br>";
    exit;
    }else{
$dados = mysqli_fetch_assoc($resultado);
  }
} 
mysqli_close($mysqli);
$image = $dados['image'];
$livro = $dados['livro'];
?>

<body>
<div class="container">
  <header class="header">
    <div class="logo">
      <img src="../imgs/logo.png" alt="Logotipo do curiousbooks" width="50" height="40">
      <h3>CURIOUSBOOKS</h3>
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
  </header>
  <!-- Fim header -->

  <div class="menu">
    <nav class="navigation-menu">
      <ul class="list-nav">
        <li class="item-nav">
          <a class="link-nav link-nav-arrow" href="#">
          <i class="fas fa-book icon"></i>
            Meu Perfil
          </a>
        </li>
                   
        <ul class="list-nav-second"></ul>
        
        <li class="item-nav">
          <a class="link-nav" href="ajuda.html">
          <i class="fas fa-circle-info icon"></i>
            Ajuda
          </a>
         </li>

        <li class="item-nav-cad">
          <a class="link-nav" href="login.html">
          <i class="fa-solid fa-user icon"></i>
            Cadastrar-se
          </a>
        </li>
    </nav>
  </div>


  <form action="show" name="info-book" method="GET">
    <section class="dados">
		  <div class="cont">
        <img src="<?= "./capas/".$image?>" alt="About us" weight="100px" height="300px">

        <div class="dados-text">
          <div class="full-box">
            <label for="nome">Nome do Livro: </label>
            <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" readonly>
          </div>
          <br>

          <div class="full-box">
            <label for="titulo">T??tulo Original: </label>
            <input type="text" name="titulo" id="titulo" value="<?php echo $dados['titulo']; ?>" readonly>
          </div>
          <br>

          <div class="half-box spacing">
            <label for="autor">Autor: </label>
            <input type="text" name="autor" id="autor" value="<?php echo $dados['autor']; ?>" readonly>
          </div>
          <br>

          <div class="half-box">
            <label for="categ">Categoria:</label>
            <input type="text" name="categ" id="categ" value="<?php echo $dados['FK_categ']; ?>" readonly>
          </div>
          <br>

          <div class="full-box">
            <label for="idioma">Idioma:</label>
            <input type="text" name="idioma" id="idioma" value="<?php echo $dados['idio']; ?>" readonly>
          </div>
          <br>

          <div class="full-box">
            <label for="pag">N??mero de p??ginas:</label>
            <input type="number" name="pag" id="pag" value="<?php echo $dados['pag']; ?>" readonly>
          </div>
          <br>

          <div class="full-box">
            <label for="data">Data de publica????o:</label>
            <input type="text" name="data" id="data" value="<?php echo $dados['data']; ?>" readonly>
          </div>
          <br>

          <div class="full-box">
            <label for="edic">Edi????o:</label>
            <input type="text" name="edic" id="edic" value="<?php echo $dados['edi']; ?>" readonly>
          </div>
          <br>
          <br>
          <br>
          <a href="<?="./livro/".$livro?>" target="_blank" ><button type="button" >Ler agora</button></a>
          <a href="index.php"><button type="button" name="voltar">Voltar</button></a>

        </div>
      </div>
    </section> 

    <div class="linha">
		
	  </div>
  
	  <div class="descr"> 
      <div class="half-box spacing">
        <br>
        <label for="descr">Descri????o</label>
        <br>
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" readonly>
        <textarea type="text" name="descr" id="descr" value="" rows="10" cols="50" readonly><?php echo $dados['descr']; ?>  </textarea>
        
        <br>
    <br>
    <br>
    
      </div>
    </div>
  </form>  
</div>
</body>
</html>