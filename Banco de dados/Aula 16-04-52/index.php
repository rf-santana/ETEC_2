<html>

<head>
    <link href="estilo.css" rel="stylesheet">
    <meta charset="UTF-8">
<title>Cidades do Brasil</title>
<style>
    h1 { 
        text-align: center;
        color: #2c3e50;
        margin-top: 30px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }
</style>

    Cidades do Brasil
</head>
<body>
    <table border = 2>

<colgroup>
    <col class="vermelho">
    <col class="azul">
</colgroup>

<tr>
    <th>Cidade</th> 
    <th>Estado</th>
</tr>

<?php include("conn.php");

$sql_tipo = " SELECT C.NOME AS CIDADE,
                     E.NOME AS ESTADO
              FROM CIDADE C, ESTADO E
              WHERE C.CODIGO_ESTADO = E.CODIGO_ESTADO";

$resulta = $conn->query ($sql_tipo);

if ($resulta->num_rows > 0) {

    while ( $row = $resulta->fetch_assoc()) {

        echo '<tr>';
        echo '<td>'. $row['CIDADE'] .'</td>';
        echo '<td>'. $row['ESTADO'] .'</td>';
        echo '</td>';
    }
}
?>
</table>
</body>
?>

</html>