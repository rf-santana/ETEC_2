<?php
    $cod = $_POST['codigo'];
    include("conn.php");
    $consulta_SQL = " SELECT A.NOME AS ALUNO,
                            D.NOME AS DISCIPLINA,
                            N.NOTA1 AS NOTA1,
                            N.NOTA2 AS NOTA2,
                            N.NOTA3 AS NOTA3,
                            ROUND ((N.NOTA1+N.NOTA2+N.NOTA3) /3,1) AS MEDIA
                       FROM ALUNO A,
                            DISCIPLINA D,
                            NOTA N
                      WHERE N.RA = A.RA
                        AND N.IDDISC = D.IDDISC
                        AND N.RA = $cod";
    $resulta = $conn -> query($consulta_SQL);

    if ($resulta -> num_rows > 0) {
        while ($row = $resulta->fetch_assoc()) {
            echo $row['ALUNO'];
            echo "<br>";
            echo $row['DISCIPLINA'];
            echo "<br>";
            echo $row['NOTA1'];
            echo "<br>";
            echo $row['NOTA2'];
            echo "<br>";
            echo $row['NOTA3'];
            echo "<br>";
            echo $row['MEDIA'];
            echo "<br>";
            echo "-----------------";
            echo "<br>";
        }
    }
    else {
        echo "Código de aluno inválido";
    }
?>