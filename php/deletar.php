 <?php
    //nessa area apenas o id  são pegos mas desta vez o id, ele é inserido na query de deletar um dado
    include "../php/conexao.php";
    $id = $_POST['id'];



    $sql = "DELETE FROM usuarios WHERE id = $id";

    if (mysqli_query($conexao, $sql)) {
        header('location: ../index.php');
    } else {
        echo "Não foi possivel estabelecer conexao com o banco de dados! Verifique seu servidor local...";
    }
