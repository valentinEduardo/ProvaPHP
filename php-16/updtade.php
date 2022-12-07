<?php
include "conn.php";

$id = 1;
$name = "Valentin Novo";


//preparar
$stmt = $connection->prepare("UPDATE student SET nameBD = :nameBD WHERE idBD = :id");

//trocar

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nameBD", $name);

//executar

$stmt -> execute();