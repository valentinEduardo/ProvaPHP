<?php
//comentário de 1 linha
/*
O aluno Virgulino Ferreira tirou as notas 7, 10, 8. Calcule a média e verifique se o aluno foi aprovado(maior ou igual que 7), para o conselho (maior ou igual que 4) ou se foi reprovado.

*/
$student = "Virgulino Ferreira";

$value1 = 7;
$value2 = 10;
$value3 = 8;

$media = ($value1+$value2+$value3)/3;


if($media>=7){
    echo "o aluno", $student, " passou com média ";
}else if($media>=4){
    echo "o aluno", $student, " irá para o conselho com média ";
}else{
    echo "o aluno ", $student, "  não foi reprovado com média ";
};

echo $media;

