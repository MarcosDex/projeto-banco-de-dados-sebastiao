<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastra.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Area de cadastro</title>
</head>

<body>
    <!-- area de cadastro basica com o methodo post para poder enviar os dados digitados para outro arquivo (getdata)-->
    <section class="container">
        <form action="../php/getdata.php" method="POST">

            <div class="input-container">
                <input type="text" id="nome" name="nome" class="text-input" placeholder="Digite Seu Nome" autocomplete="off" required />
            </div>
            <br>
            <div class="input-container">
                <input type="number" id="cpf" name="cpf" class="text-input" placeholder="Digite Seu CPF: formatado aceitado - xxx.xxx.xxx-xx" autocomplete="off" required />
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
                <input type="password" name="senha" id="password" class="text-input" data-toggle="password" placeholder="Digite Uma Senha">
                <div class="input-container">
                </div>
            </div>
            <br>
            <input class="btcadastrar" id="submit" type="submit" name="submit" value="Criar meu cadastro">
            <br />
        </form>
    </section>
    <a href="../php/login.php" id="logar">Já possui uma conta? Entre agora mesmo!
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>

<script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

</html>