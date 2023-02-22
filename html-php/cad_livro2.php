<?php 
    include_once('conexao.php')
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="../css/style.CSS">
    <script src="https://kit.fontawesome.com/ae3ca4976e.js"  crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
/* geral */
* {
  margin: 0;
  padding: 0;
  border: none;
}

.corpo{
  margin-top: 8vh;
}

input, label {
  display: block;
  outline: none;
  width: 100%;
}


/* form */
#main-container {
  width: 90%;
  margin-left: auto;
  margin-right: auto;
  background-color: #837268;
  border-radius: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding: 30px 35px;
 
}

#main-container h1 {
  text-align: center;
  margin-bottom: 25px;
  font-size: 1.6rem;
  color: #fae5c4;
}

form {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.full-box {
  flex: 1 1 100%;
  position: relative;
}

.half-box {
  flex: 1 1 45%;
  position: relative;
}

.cat{
  margin-left: 5%;
  margin-right: -60%;
}

.categ{
  font-size: 1rem;
}
.spacing{
  margin-left: 5%;
}


label {
  font-weight: bold;
  font-size: 1.5rem;
  color: #fae5c4;
}


input {
  border-bottom: 2px solid #fae5c4;
  padding: 10px;
  font-size: 0.9rem;
  margin-bottom: 40px;
  background: #837268;
  color: black;
}

input[type="date"]{
  color: black;
  font-size: 1rem;
}

input:focus {
  border-color: #fae5c4;
  color: black;
  font-size: 1rem;

}

input[type="submit"] {
  background-color: #504843;
  color: #fae5c4;
  border: none;
  border-radius: 20px;
  height: 40px;
  cursor: pointer;
  font-weight: bold;
  width: 40%;
  margin-left: 30%;
  font-size: 1rem;
  font-family: georgia;
  
}

input::placeholder{
  color: black;
  font-size: 1rem;
}
/*-------------------------------------------------*/
.div-select {
  width: 250px;
  overflow: hidden;
}

.div-select select {
  background: url(http://www.webcis.com.br/images/imagens-noticias/select/ico-seta-select.gif) no-repeat  #504843;
  font-family: georgia;
  font-size: 18px;
  padding: 5px;
  color: #fae5c4;
  text-indent: 0.01px;
  text-overflow: "";
  height: 20%;
  border-radius: 10px;
  margin-top: 0.5rem;
}

.div-select select::-ms-expand {
  display: none;
}

.link-nav-arrow::after {
  color: #302B28;
}

.menu {
    height: 220vh;
    background-color: #302B28;
    color: #fae5c4;
    padding-bottom: 5%;
}

</style>
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

          <div class="page">
            <div id="main-container">
              <h1><i class="fa-solid fa-plus icon"></i> Cadastrar Novo Livro</h1>

              <form id="register-form" action="cad_livro.php" method="POST" enctype="multipart/form-data">
                <div class="full-box">
                  <label for="nome">Nome do Livro</label>
                  <input type="text" name="nome" id="nome" placeholder="Digite o nome do novo livro" data-min-length="1">
                </div>

                <div class="full-box">
                  <label for="titulo">Título Original</label>
                  <input type="text" name="titulo" id="titulo" placeholder="Digite o título original do livro" data-min-length="1">
                </div>
                  
                <div class="half-box">
                  <label for="autor">Nome do Autor</label>
                  <input type="text" name="autor" id="autor" placeholder="Digite o nome do autor"  data-required data-min-length="3" data-max-length="200">
                </div>

                <div class="half-box cat">
                  <label class="categ">Categoria do livro</label>
                    <div class="div-select">
                      <select name="select_categoria">
                        <option>Selecione</option>
                          <?php
                          $result_categoria = "SELECT * FROM categ_livro ";
                          $resultado_categotia = mysqli_query($mysqli, $result_categoria);
                          while ($row_categ_livro = mysqli_fetch_assoc($resultado_categotia)) { 
                          ?>
                        <option value="<?php echo $row_categ_livro['tipo_categ'];  ?>">
                        <?php 
                        echo $row_categ_livro['tipo_categ']; 
                        ?>
                        </option>
                        <?php  } ?>
                      </select> 
                    </div>  
                </div>

                <div class="full-box">
                  <label for="idio">Idioma</label>
                  <input type="text" name="idio" id="idio" placeholder="Digite o idioma do novo livro" data-min-length="1">
                </div>

                <div class="full-box">
                  <label for="pag">Páginas</label>
                  <input type="text" name="pag" id="pag" placeholder="Digite o número de páginas do novo livro" data-min-length="1">
                </div>

                <div class="full-box">
                  <label for="data">Data de publicação</label>
                  <input type="date" name="data" id="data" placeholder="Digite a data do novo livro" data-min-length="1">
                </div>

                <div class="full-box">
                  <label for="edi">Edição</label>
                  <input type="text" name="edi" id="edi" placeholder="Digite a edição do novo livro" data-min-length="1">
                </div>

                <div class="full-box">
                  <label for="descr">Descrição</label>
                  <input type="text" name="descr" id="descr" placeholder="Digite a sinopse ou resumo do livro" data-required data-min-length="10">
                </div>

                <div class="half-box"> 
                  <label for="name">Image:</label>
                  <input type="file" name="image" class="form-control">
                </div> <br>

                <div class="half-box spacing"> 
                  <label for="name">Livro:</label>
                  <input type="file" name="livro" class="form-control">
                </div> 

                <div class="full-box">
                  <input id="btn-submit" type="submit" value="ADICIONAR">
                </div>

              </form>
            </div>

            <script src="js/scripts.js"></script>

          </div>
        </div>
          <footer>
            <h6>&copy; Copyright 2022 curiousbooks.com.br - Todos os Direitos Reservados</h6>
          </footer>
           
</div>    
           
    <script src="../js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/custom.js"></script>
</body>
</html>
      