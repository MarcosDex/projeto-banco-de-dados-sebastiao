<?php
session_start();
//Se a o botão (submit), email e senha forem nulos redireciona pra area de login dnv (bloqueando o usuario de entrar sem perm)
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    //se o usuario preencher todos os campos ele acessa o sistema
    include_once('../php/conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    #Aqui ele pega todos os campos onde email = a variavel email & senha = a variavel senha
    $sql = "SELECT * FROM  usuarios WHERE email = '$email' and senha = '$senha'";

    $resultado = $conexao->query($sql);

    //Essa condição seta uma email e senha globais, para poder serem utilizadas em arquivos futuros no servidor.
    if (mysqli_num_rows($resultado) < 1) {
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../index.php');
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../sistema.php');
    }
} else {
    //se o usuario n preencher todos ou nenhum campo n tem acesso ao sistema e retorna pra area de login novamente
    header('Location: ../php/login.php');
}
