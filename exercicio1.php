<?php  
function funcao ($a,$b){  
return  $a+$b; 
 } 

 $a=10;  
 $b=31;  
 $c = funcao($a,$b); 
 

if ($c>20)  {
    echo ($c+8) ; 
} elseif($c<=20) {
    echo ($c-5) ;
}
     

   
/* Construir um programa que receba 2 números em variáveis e efetue a adição. Caso o valor 
somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; 
caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.*/