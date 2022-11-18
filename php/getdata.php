<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/cadastrar.css" />
    <title>Adicionando cadastros ao banco!</title>
</head>

<body>
    <div id="container">
        <div class="row">
            <?php
            //neste arquivo ele recebe as informações do cadastro. O insert into manda os arquivos para o banco de dados. O if query($conexao,$sql) verifica se ta tudo certo se tiver o header:location manda para a login.php que é main page
            include "../php/conexao.php";
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $data = $_POST['data'];


            $sql = "INSERT INTO usuarios (id, nome, cpf, email, data, senha) VALUES (NULL,'$nome', '$cpf','$email', '$data', '$senha')";

            if (mysqli_query($conexao, $sql)) {
                header('location: ../php/login.php');
            } else {
                echo "$email já cadastrado, tente outro email! <a href=\"../php/cadastra.php\">Tentar novamente</a>";
            }

            ?>

        </div>
    </div>