<?php

$pessoas = array ("Asdrubal","Aristovaldo","Adacleusa", "Cidicleia",);

$totalNomes = count($pessoas);
$contador = 0;

while ($contador < $totalNomes) {
    echo $pessoas[$contador] . "</br>";
    $contador++;
}

//Listar o conteúdo de um array utilizando a estrutura de repetição DO WHILE