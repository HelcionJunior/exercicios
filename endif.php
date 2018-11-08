<?php

$salario = 4;

if($salario <= 1000):
    echo "Maravilha, escapou do leão";
elseif ($salario <= 1500):
    echo "Seu imposto é de 10%";
elseif ($salario <= 2000):
    echo "Seu desconto é de 15%, tente não ter aumento de salário";
elseif ($salario > 2000):
    echo "Huum, seu imposto de 20% é o maior desconto que existe hoje em dia";
endif;

