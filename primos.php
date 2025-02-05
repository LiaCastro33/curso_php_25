<?php
/**
 * Exercicio2:
 * Dado um numero informado pelo usuario
 * informar se ele é um numero primo.
 */ 

 //1, 3, 5, 7, 9
/*
9 / 2
9 / 3
...
9 / 8 (9 -1) $numero -1
*/

$numero = 21;
//9 / 8 (9 -1) $numero -1

$limitador = $numero - 1;

for ($i = 2; $i <= $limitador; $i++){
    //echo "i= $i<br>"; 

    $resto = $numero% $i;

    //break  


$i = 0;
$i = $i + 1;
$i++;

if ($resto == 0) {
    $primo = false;
    break;
   }
}


if ($primo){
   echo "<br>O $numero é primo.";
} else {
   echo "<br>O $numero é não é primo.";
}

