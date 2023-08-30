<?php
//conexão com o o banco
$servername = "servername";

$username = "username";

$password = "password";



// Criação da conexão

$conn = new mysqli($servername, $username, $password);



// Verifica a conexão

if ($conn->connect_error) {

    die("Conexão falhou: " . $conn->connect_error);

}



// Criação do banco de dados

$sql = "CREATE DATABASE IF NOT EXISTS sistema_token";

if ($conn->query($sql) === true) {

    echo "Banco de dados criado com sucesso.<br>";

} else {

    echo "Erro na criação do banco de dados: " . $conn->error . "<br>";

}



$conn->close();



// Criação da conexão com o novo banco de dados

$conn = new mysqli($servername, $username, $password, "sistema_token");



// Verifica a conexão

if ($conn->connect_error) {

    die("Conexão falhou: " . $conn->connect_error);

}



// Criação da tabela

$sql = "CREATE TABLE IF NOT EXISTS chamados (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(255),

    tipo VARCHAR(50),

    prioridade VARCHAR(1),

    status VARCHAR(50),

    codigo VARCHAR(5)

)";



if ($conn->query($sql) === true) {

    echo "Tabela criada com sucesso.";

} else {

    echo "Erro na criação da tabela: " . $conn->error;

}



$conn->close();

?>

