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
#essa é uma variavel global, as variaveis globais são representadas por $_SESSION['<nome que colocou no campo name>']
$logadoemail = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loja.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
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
                    <a class="nav-link" href="#"></a>
                    <a class="nav-link"></a>
                </div>
            </div>

            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"><?php echo "Bem vindo $logadoemail" ?></a><i class="fa-solid fa-cart-shopping"></i>
                <div class="dropdown-content">
                    <?php echo "<a href=\"../php/perfil.php?\">Meu Perfil</a>" ?>
                    <a href="../php/sair.php">Deslogar</a>
                </div>
            </li>
            </ul>
        </div>
        </div>


    </nav>

    <img src="../images/palmares.jpg" alt="" width="350px">
    <h1 id="valorcamisa">R$50,00</h1> <i class="fa-solid fa-cart-shopping-fast"></i>
    <button class="palmeiras" onclick="alert('Adicionado ao Carrinho!')">Comprar<i class="fa-solid fa-cart-shopping"></i></button>
    <br>
    <img src="../images/ocarajogadegatokkkkkkk.jpg" alt="" width="350px">
    <h1 id="valorcard">R$100,00</h1> <i class="fa-solid fa-cart-shopping-fast"></i>
    <button class="cardlol" onclick="alert('Adicionado ao Carrinho!')">Comprar<i class="fa-solid fa-cart-shopping"></i></button>
    <br>
    <img src="../images/ifonecringekkkkkk.jpg" alt="" width="350px">
    <h1 id="valorcard">R$15.000,00</h1> <i class="fa-solid fa-cart-shopping-fast"></i>
    <button class="cardlol" onclick="alert('Adicionado ao Carrinho!')">Comprar<i class="fa-solid fa-cart-shopping"></i></button>
    <br>

    <?php

    ?>
</body>

</html>