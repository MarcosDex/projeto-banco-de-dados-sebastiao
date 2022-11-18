<?php
session_start();
include "php/conexao.php";
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['nome']);
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ../php/login.php');
} else {

  $logadoemail = $_SESSION['email'];
  $logadosenha = $_SESSION['senha'];
}

$sql = "SELECT * FROM usuarios WHERE email = '$logadoemail'";
$dados = mysqli_query($conexao, $sql);

while ($line = mysqli_fetch_assoc($dados)) {
  $nome = $line['nome'];
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
  <title>Projeto Banco de Dados Sebastião</title>
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
          <a class="nav-link" href="../php/lojafront.php">Lojinha do KIN</a>
          <a class="nav-link"></a>
        </div>
      </div>

      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn"><?php echo "Bem vindo $nome" ?></a>
        <div class="dropdown-content">
          <?php echo "<a href=\"../php/perfil.php?\">Meu Perfil</a>" ?>
          <a href="../php/sair.php">Deslogar</a>
        </div>
      </li>
      </ul>
    </div>
    </div>


  </nav>
  <section class="teams" id="teams">

  </section>
</body>


</html>