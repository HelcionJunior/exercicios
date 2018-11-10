<?php

$personalidades = array("Maomé","Isaac Newton","Jesus de Nazaré","Sidarta Gautama",
"Confúcio",
"Paulo de Tarso","Cai Lun","Johannes Gutenberg","Cristovão Colombo",
"Albert Einstein","Louis Pasteur","Galileu Galilei","Aristóteles","Euclides",
"Moisés","Charles Darwin","Qin Shihuang","Augusto",
"Nicolau Copérnico","Antoine Lavoisier",);

foreach ($personalidades as $historicas) {
    echo $historicas . "</br>";
}

asort($personalidades);
echo "<br> ordem crescente<br><br>";
foreach ($personalidades as $historicas) {
   echo $historicas ."<br>";
}

arsort($personalidades);
echo "<br> ordem decrescente<br><br>";
foreach ($personalidades as $historicas) {
   echo $historicas ."<br>";
}


shuffle($personalidades);
echo "<br> ordem bagunçada<br><br>";
foreach ($personalidades as $historicas) {
   echo $historicas ."<br>";
}

