<?php
$mysqli = new mysqli("localhost", "root", "", "exemplo_pfp");

if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuario (nome, email) VALUES ('$nome', '$email')";

if ($mysqli->query($sql)) {
    echo "Usúario cadastrado com sucesso!";   
} else {
    echo "Erro: " . $mysqli->error;
}

$mysqli->close();
?>