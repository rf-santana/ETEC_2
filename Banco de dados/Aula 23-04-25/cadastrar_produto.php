<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "produto";

$conn = new mysqli ($servername, $username ,$password, $dbname);

if ($conn->connect_error) {
    die("Conexão Falhou: " . $conn->connect_error);
}

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];

$sql = "INSERT INTO produtos (nome, descricao, preco) VALUES ('$nome', '$descricao', $preco)";

if ($conn->query($sql) === TRUE) {
    echo "Produto cadastrado com sucesso!";
}   else {
    echo "Erro no cadastro do produto: " . $conn->error;
}

$conn->close();