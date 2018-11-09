<?php
  
    $numeroInicial = 2;
    $numeroFinal = 100;

    $divisor = 10;
    $contador = $numeroInicial;

        echo "No intervalo entre ".$numeroInicial. " e o ".$numeroFinal. " somente estes numeros são divisíveis por ".$divisor. "<br>" ;
    while($contador <= $numeroFinal){
        $numero = $contador % $divisor;
        if($numero ==0){
            echo $contador. " da para se dividir por ".$divisor."<br>";
        }
        $contador +=1;
    }