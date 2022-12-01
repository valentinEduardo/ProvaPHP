<?php
include "conn.php";

$id = 7;

//preparar
$stmt = $connection->prepare("DELETE FROM student WHERE idBD = :id");


//trocar
$stmt->bindParam(":id", $id);

//execrutar

$stmt->execute();