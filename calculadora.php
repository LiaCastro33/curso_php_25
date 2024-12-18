<?php
//Função para realizar operações

 $num1 =1155;
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
 
} else{
    echo "ERRO";
}