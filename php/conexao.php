<?php

$bdHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cadastrobd';

$conexao = new mysqli($bdHost, $dbUsername, $dbPassword, $dbName);

// if ($conexao->connect_errno) {
//     echo "Erro ao conetar banco de dados";
// } else {
//     echo "Conexão estabelecida com sucesso!";
// }
