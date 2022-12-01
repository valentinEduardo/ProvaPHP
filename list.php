<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
       a{
        text-decoration: none;
       } 
       #voltar{
        font-size: 2cm;
        color: yellow;
       }
    </style>
</head>
<body>
    <a href="index.php" id="voltar"><</a>
    <br>
</body>
</html>

<?php
include "conn.php";

//preparar
$stmt = $connection->prepare("SELECT * FROM student ORDER BY idBD");

//executar
$stmt-> execute();

//buscar
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
 echo "nome do aluno: ". $row['nameBD']."<br>";
 echo "email do aluno: ". $row['emailBD']."<br>";
 echo"----------------------------- <br>";
}

