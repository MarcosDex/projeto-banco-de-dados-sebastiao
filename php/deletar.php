 <?php
    //nessa area apenas o id e o chassi são pegos mas desta vez o id é  pego por um get e transformado em um post e dps são inseridos na query de deletar um dado
    include "../php/conexao.php";
    $id = $_POST['id'];
    #$email = $_POST['email'];


    $sql = "DELETE FROM usuarios WHERE id = $id";

    if (mysqli_query($conexao, $sql)) {
        header('location: ../index.php');
    } else {
        echo "Não foi possivel estabelecer conexao com o banco de dados! Verifique seu servidor local...";
    }
