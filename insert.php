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
</body>
</html>


<?php
include "conn.php";


$name = $_POST['user'];
$email = $_POST['email'];

//preparar

$stmt = $connection->prepare("INSERT INTO student (nameBD, emailBD) VALUES(:nameBD, :emailBD)");

//trocar
$stmt ->bindParam(":nameBD", $name);
$stmt -> bindParam(":emailBD", $email);


echo "Cadastro realizado"
//executar

$stmt ->execute();