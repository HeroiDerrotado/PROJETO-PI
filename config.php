<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'usurios_banco';  

// Conectar ao banco de dados
$mysql = new mysqli($host, $usuario, $senha, $database);

// Verificar a conexão
if ($mysql->connect_error) {
    die("Erro na conexão: " . $mysql->connect_error);
}

?>



