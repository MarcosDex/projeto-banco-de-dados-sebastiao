<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de cadastro</title>
</head>

<body>
    <form action="../php/getdata.php" method="POST">

        <div class="input-container">
            <input type="text" id="nome" name="nome" class="text-input" placeholder="Digite Seu Nome" autocomplete="off" required />
        </div>
        <br>
        <div class="input-container">
            <input type="email" id="email" name="email" class="text-input" placeholder="Digite Seu Email" autocomplete="off" required />
        </div>
        <br>
        <div class="input-container">
            <input type="date" id="data" name="data" class="text-input" autocomplete="off" required />
        </div>
        <br />
        <div class="input-container">
            <input type="password" id="senha" name="senha" class="text-input" placeholder="Digite Sua Senha" autocomplete="off" required />
        </div>
        <br>
        <input class="btcadastrar" id="submit" type="submit" name="submit" value="Cadastrar">
        <br />
    </form>
</body>

</html>