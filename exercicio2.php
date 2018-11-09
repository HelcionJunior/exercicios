<?php


$numero=65;

if ($numero % 10 == 0){
    echo $numero . " é divisível por 10 = " . $numero/10 . "<br>";
}else{
    echo $numero . " nao divisível por 10 <br>";
}
if ($numero % 5 == 0){
    echo $numero . " é divisível por 5 = " . $numero/5 . "<br>";}
else{
    echo $numero . " nao divisível por 5 <br>";
}
if ($numero % 2 == 0){
    echo $numero . " é divisível por 2 = " . $numero/2 . "<br>";}
else
{
    echo $numero . " nao divisível por 2 <br>";}

 /*Entrar com um número, através de variáveis, e informar se ele é divisível por 10, por 5, 
    por 2 ou se não é divisível por nenhum destes. 

Caso ele seja divisível por apenas um dos números ou dois dos números mostre pelos quais ele 
é divisível.*/
