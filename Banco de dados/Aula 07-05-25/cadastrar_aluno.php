<?php
$conn = new mysqli("localhost", "root", "", "escola");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$turma_id = $_POST['turma_id'];

$sql = "INSERT INTO alunos (nome, turma_id) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $nome, $turma_id);

if ($stmt->execute()) {
    echo "Aluno cadastrado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>