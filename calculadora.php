<?php
//Função para realizar operações

 $num1 = 100;
 $num2 = 5;

 $operacao = "/";
 

 if ($operacao == "+") {
    $soma = $num1 + $num2;
    echo "$soma";
 }

 if ($operacao == "-") {
    $subtracao = $num1 - $num2;
    echo "$subtracao";
 }
 if ($operacao == "*") {
    $multiplicacao = $num1 * $num2;
    echo "$multiplicacao";
 }
 if ($operacao == "/") {
    $divisao = $num1 / $num2;
    echo "$divisao";


    //Para fazer o percentual # = %

      $Percentual = $num2 / 100;
      echo "$Percentual";
 
} else{
    echo "ERRO";
}