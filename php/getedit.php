<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/cadastrar.css" />
    <title>Alterando</title>
</head>

<body>
    <div id="container">
        <div class="row">
            <?php
            //nesse escopo os arquivos são pegos pelo POST do perfil.php e armazenados em uma variavel post, o sql daqui manda os valores atualizados para a perfil.php que é onde esta o READ da nossa operação
            include "../php/conexao.php";
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $data = $_POST['data'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];


            $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', cpf = '$cpf', data = '$data', senha = '$senha' WHERE id = $id";

            if (mysqli_query($conexao, $sql)) {
                header('location: ../php/perfil.php');
            } else {
                echo "Não foi possivel realizar a troca de dados... Por favor consulte um administrador!";
            }

            ?>

        </div>
    </div>