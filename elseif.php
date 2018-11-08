<?php

$salario = 2030;

if($salario <= 1000){
    echo "Maravilha, escapou do leão";
}elseif ($salario <= 1500) {
    echo "Seu imposto é de 10%";
}elseif ($salario <= 2000) {
    echo "Seu desconto é de 15%, tente não ter aumento de salário";
}elseif ($salario > 2000) {
    echo "Huum, seu imposto de 20% é o maior desconto que existe hoje em dia";
}










/* 
- Quem ganha até R$ 1.000 não paga nada de imposto !
- Quem ganha até R$ 1.500 paga 10% de imposto !
- Quem ganha até R$ 2.000 paga 15% de imposto !
- E quem ganha acima de R$ 2.000 paga 20% de imposto!

Crie um programa que emita uma mensagem informando qual o percentual de imposto que o funcionário 
vai pagar. Algo semelhante a 
"Uau! Você não vai pagar nada de imposto!" ou "Caramba! Você paga 20% de imposto!"*/