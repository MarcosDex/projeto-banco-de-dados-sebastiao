<?php
//arquivo de conexão com banco de dados
$bdHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cadastrobd';

$conexao = new mysqli($bdHost, $dbUsername, $dbPassword, $dbName);

//Verifica se a conexão existe ou não
// if ($conexao->connect_errno) {
//     echo "Erro ao conetar banco de dados";
// } else {
//     echo "Conexão estabelecida com sucesso!";
// }
