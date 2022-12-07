<?php

$arraySergipe = ["Aracaju", "N. S. Socorro", "Lagarto", "Itabaiana", "S. Cristovão", "Estância", "Tobias Barreto"];

$contador = count($arraySergipe);
$i = 0;

while ($i < $contador){
    echo $arraySergipe[$i];
    echo "<br>";
    $i++;
    if($i==9){
        echo "<FIM>";
    }
}