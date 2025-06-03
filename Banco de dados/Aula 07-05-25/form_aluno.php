<?php
$conn = new mysqli("localhost", "root", "", "escola");
if ($conn->connect_error) {
    die("Erro na conexão: ". $conn->connect_error);
}

$sql = "SELECT id, nome FROM turmas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        form { max-width: 400px; padding: 20px; border: 1px solid #ccc; }
        label, select, input { display: block; width: 100%; margin-bottom: 10px; }
        button { padding: 10px 20px; }
    </style>
</head>
<body>

<h2>Cadastro de Aluno</h2>
<form action="cadastrar_aluno.php" method="POST">
    <label for="nome">Nome do Aluno:</label>
    <input type="text" name="nome" required>

    <label for="turma">Turma:</label>
    <select name="turma_id" required>
        <option value="">Selecione</option>
        <?php while ($row = $result->fetch_assoc()) { ?>
             <option value="<?= $row['id'] ?>"><?= $row['nome'] ?></option>
        <?php } ?>
    </select>

    <button type="submit">Cadastrar</bottom>
</form>
</body>
</html>