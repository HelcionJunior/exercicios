<?php
  $mes = [
  "Janeiro", "Fevereiro","Março", "Abril", "Maio", "Junho","Julho", "Agosto","Setembro",
   "Outubro","Novembro", "Dezembro"];
 
  $numeroMes = 13;
 
  if($numeroMes >=1 && $numeroMes <=12){
    echo $mes[$numeroMes - 1];
  }else{
    echo "Mês inválido";
  }

  /*Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. 
  Caso o número seja fora desse intervalo, informar que não existe mês com este número*/
