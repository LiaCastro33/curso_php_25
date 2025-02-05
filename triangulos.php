<?php 
/**
 * dados 3 medidas informadas pelo usuario 
 * diga qual é o tipo do triangulo:
 * 1 - equilatero
 * 2 - isosceles
 * 3 - escaleno
 */


 $ladoA =3;
 $ladoB =3;
 $ladoC =6;



 if ($ladoA == $ladoB && $ladoB == $ladoC) {
	echo "As medidadas informadas formam um triangulo equilatero";
 }

 elseif ($ladoA == $ladoB && $ladoB!= $ladoC) {
	echo "As medidadas informadas formam um triangulo isoceles";
 }
 else {
 echo "As medidadas informadas formam um triangulo escaleno";

 }