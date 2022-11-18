<?php
session_start();
include "../php/conexao.php";
//Se a o botão (submit), email e senha forem nulos redireciona pra area de login dnv (bloqueando o usuario de entrar sem perm)
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['nome']);
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ../php/login.php');
} else {

  $logadoemail = $_SESSION['email'];
  $logadosenha = $_SESSION['senha'];
}

$logadoemail = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/estilo.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Lojinha do Kin</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Lojas Desamericanas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../php/home.php">Home</a>
          <a class="nav-link" href="#">Lojinha do KIN</a>
          <a class="nav-link" href="#"></a>
          <a class="nav-link"></a>
        </div>
      </div>

      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn"><?php echo "Bem vindo $logadoemail" ?></a>
        <div class="dropdown-content">
          <?php echo "<a href=\"../php/perfil.php?\">Meu Perfil</a>" ?>
          <a href="../php/sair.php">Deslogar</a>
        </div>
      </li>
      </ul>
    </div>
    </div>


  </nav>
  <div id="container">
    <header>
      <picture>
        <img src="../images/Kinemon.png" alt="logo" />
      </picture>
      <h1>LOJINHA DO KIN'</h1>
    </header>
    <nav>
      <ul>
        <li><a href="#" class="abaescolha">Samurais</a></li>
        <li><a href="#" class="abaescolha">Piratas</a></li>
        <li><a href="#" class="abaescolha"> Ninjas</a></li>
        <li><a href="#" class="abaescolha">Minks</a></li>
      </ul>
    </nav>

    <main>
      <header>
        <h1>Produtos</h1>
      </header>
      <section class="produtos">
        <section class="produto">
          <img src="../images/Roupas-One-Piece-Gold-Brook.jpg" alt="Roupa-Brook" />
          <p onclick="alert('Adicionado ao Carrinho!')">Cartola Clássico</p>
        </section>
        <section class="produto">
          <img src="../images/Roupas-One-Piece-Gold-Usopp-300x213.jpg" alt="Roupa-Usopp" />
          <p onclick="alert('Adicionado ao Carrinho!')">Camuflado Moderno</p>
        </section>
        <section class="produto">
          <img src="../images/Roupas-One-Piece-Gold-Chopper.jpg" alt="Roupa-Chopper" />
          <p onclick="alert('Adicionado ao Carrinho!')">Estilo Aviador</p>
        </section>
        <section class="produto">
          <img src="../images/Roupas-One-Piece-Gold-Luffy-300x213.jpg" alt="Roupa-Luffy" />
          <p onclick="alert('Adicionado ao Carrinho!')">Praieiro Moderno</p>
        </section>
        <section class="produto">
          <img src="../images/Roupas-One-Piece-Gold-Nami-300x213.jpg" alt="Roupa-Nami" />
          <p onclick="alert('Adicionado ao Carrinho!')">Leg com Salto</p>
        </section>
        <section class="produto">
          <img src="../images/Roupas-One-Piece-Gold-Robin-300x213.jpg" alt="Roupa-Robin" />
          <p onclick="alert('Adicionado ao Carrinho!')">Sobretudo e Meia Calça</p>
        </section>
        <section class="produto">
          <img src="../images/Roupas-One-Piece-Gold-Sanji-300x213.jpg" alt="Roupa-Sanji" />
          <p onclick="alert('Adicionado ao Carrinho!')">Blazer Clássico</p>
        </section>
        <section class="produto">
          <img src="../images/Roupas-One-Piece-Gold-Zoro-300x213.jpg" alt="Roupa-Zoro" />
          <p onclick="alert('Adicionado ao Carrinho!')">Aventureiro Despojado</p>
        </section>
        <section class="produto">
          <img src="../images/Roupas-One-Piece-Gold-Franky-300x213.jpg" alt="Roupa-Fraky" />
          <p onclick="alert('Adicionado ao Carrinho!')">Smoking Clássico</p>
        </section>
        <section class="produto">
          <img src="../images/FQHKasqaAAE7bz-.jpg" alt="Roupa-Jinbei" />
          <p onclick="alert('Adicionado ao Carrinho!')">Estilo Motoqueiro</p>
        </section>
      </section>
    </main>
  </div>
</body>

</html>