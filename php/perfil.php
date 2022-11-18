<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Area de cadastro</title>
</head>

<body>

    <?php
    //Aqui não precisou especificar por que ele ja esta tomando um include do sistema.php (que ja possui as informações de post e de proteção ao arquivo pre-login)
    include "../php/conexao.php";
    include_once "../sistema.php";

    $sql = "SELECT * FROM usuarios WHERE email = '$logadoemail'";
    $dados = mysqli_query($conexao, $sql);

    ?>

    <section class="container">
        <?php
        #Este laço while verifica as linhas da tabela no banco com os seguintes nomes.
        while ($line = mysqli_fetch_assoc($dados)) {
            $id = $line['id'];
            $nome = $line['nome'];
            $cpf = $line['cpf'];
            $data = $line['data'];
        }
        ?>

        <form action="../php/getedit.php" method="POST">

            <div class="input-container">
                <input type="text" id="nome" name="nome" class="text-input" placeholder="Digite Seu Nome" autocomplete="off" required value="<?php echo $nome; ?>" />
            </div>
            <br>
            <div class="input-container">
                <input type="number" id="cpf" name="cpf" class="text-input" placeholder="Digite Seu CPF: formatado aceitado - xxx.xxx.xxx-xx" autocomplete="off" required value="<?php echo $cpf; ?>" />
            </div>
            <br>
            <div class="input-container">
                <input type="email" id="email" name="email" class="text-input" placeholder="Digite Seu Email" autocomplete="off" required value="<?php echo $logadoemail; ?>" />
            </div>
            <br>
            <div class=" input-container">
                <input type="date" id="data" name="data" class="text-input" autocomplete="off" required value="<?php echo $data; ?>" />
            </div>
            <br />
            <div class="input-container">
                <input type="password" name="senha" id="password" class="text-input" data-toggle="password" placeholder="Digite Uma Senha" value="<?php echo $logadosenha; ?>">
                <div class="input-container">
                </div>
            </div>
            <br>
            <input class="btcadastrar" id="submit" type="submit" name="submit" value="Salvar Alterações!">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <a href='#' class='btn btn-outline-danger' data-bs-toggle='modal' data-toggle='modal' data-target='#modalconfirm' onclick=get_frommodal($id, $email)>Excluir Conta</a>

            <br />
        </form>
        <img src="../images/avatar.jpg" id="avatar" alt="">

        <h1 id="nome_perfil">Nome:</h1>
        <h1 id="cpf_perfil">CPF:</h1>
        <h1 id="email_perfil">Email:</h1>
        <h1 id="datanasc_perfil">Data de Nascimento:</h1>
        <h1 id="senha_perfil">Senha:</h1>
        <button id="foto_perfil">Alterar foto</button>
    </section>
    <div class="modal fade" id="modalconfirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmar Exclusão <b>PERMANENTE</b>?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../php/deletar.php" method="POST">
                        <p>Deseja realmente deletar este dado da existencia? //dados excluidos não podem ser restaurados//</p>
                        <p>O dados a serem excluidos são:<b id="transformjs"><?php echo "$nome"; ?></b></p>
                        <p>Email: <b id="transformjs"><?php echo "$logadoemail"; ?></b></p>
                        <p>Cpf: <b id="transformjs"><?php echo "$cpf"; ?></b></p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="hidden" name="id" id="identidar" value="">
                    <input type="hidden" name="email" id="identidaremail" value="">
                    <input type="submit" class="btn btn-danger" value="Confirmar!">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

</html>