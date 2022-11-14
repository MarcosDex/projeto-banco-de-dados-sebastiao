<?php
session_start();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ../php/login.php');
} else {
  $logadonome = $_SESSION['nome'];
  $logadoemail = $_SESSION['email'];
  $logadosenha = $_SESSION['senha'];
}


?>
<!DOCTYPE html>
<html lang="br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <title>Projeto Banco de Dados Sebastião</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Unifalip Fyden</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
          <a class="nav-link" href="#">Ofertas do dia</a>
          <a class="nav-link" href="#"></a>
          <a class="nav-link"></a>
        </div>
      </div>

      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn"><?php echo "Bem vindo $logadonome" ?></a>
        <div class="dropdown-content">
          <?php echo "<a href=\"../php/perfil.php?id=$logadoemail\">Meu Perfil</a>" ?>
          <a href="../php/sair.php">Deslogar</a>
        </div>
      </li>
      </ul>
    </div>



  </nav>
  <section class="teams" id="teams">

  </section>
  <?php

  ?>
</body>


</html>