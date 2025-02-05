<?php

const CPF = '12345678901';
const VELOCIDADE_DA_LUZ = '320k\s2';

// tipos de dados primitivos.
$string = "Um texto qualquer";
$string = "joao do caminhao"; // override = substituir o que existia
$nomePessoa = "Ariel"; // style guide Camel Case
$nome_pessoa = "Ariel"; // style guide Snake Case
$inteiro = 2;
$float = 2.5;
$double = 2.5468;
$char = 'a';

// tipos de dados estruturais
$array = array(); // versoes antigas do php 5.0 - 7.0
$array_short = []; // veroses mais novas do php 7.0+

$objeto = new stdClass(); // POO - OOP
$classe = new stdClass();

// POO - OOP
class CanetaAzul {
    // Atributos e/ou Propriedades
    public const COR = "Azul";
    public const PLASTICO = true;
    public $nome;
    public $tipoMaterial = "Plastico";
    public $dimensoes;
    public $tipo;

   // metodos e/ou funcoes
   public function escrever() {

   }

   public function pintar() {

   }
}

echo "Ola 
    <b>
        <i>
            mundo!
        </i>
    </b>
<br>"; // <br></br> = <br/> ou <br>

$string = "joao do caminhao";
echo $string; // joao do caminhao

echo "<br>CPF: " . CPF;

$a = 10;
$b = 20;
$x =  $a + $b;
echo "<br>x: " . $x;

$soma =  10 + 10;
echo "<br>soma: " . $soma;

// Tema de casa sera fazer a tabuada (6, 7) e mostra na tela.

$numero = 6;
echo "<br>tabuada:<br>";
echo "<br> $numero x 1 = ". $numero * 1;
echo "<br> $numero x 1 = ". $numero * 2;
echo "<br> $numero x 1 = ". $numero * 3;
echo "<br> $numero x 1 = ". $numero * 4;
echo "<br> $numero x 1 = ". $numero * 5;
echo "<br> $numero x 1 = ". $numero * 6;
echo "<br> $numero x 1 = ". $numero * 7;
echo "<br> $numero x 1 = ". $numero * 8;
echo "<br> $numero x 1 = ". $numero * 9;
echo "<br> $numero x 1 = ". $numero * 10;

echo "<br>";

$numero = 7;
echo "<br>tabuada:<br>";
echo "<br> $numero x 1 = ". $numero * 1;
echo "<br> $numero x 1 = ". $numero * 2;
echo "<br> $numero x 1 = ". $numero * 3;
echo "<br> $numero x 1 = ". $numero * 4;
echo "<br> $numero x 1 = ". $numero * 5;
echo "<br> $numero x 1 = ". $numero * 6;
echo "<br> $numero x 1 = ". $numero * 7;
echo "<br> $numero x 1 = ". $numero * 8;
echo "<br> $numero x 1 = ". $numero * 9;
echo "<br> $numero x 1 = ". $numero * 10;

/*
/
+
-
. 
= (ATRIBUICAO)
== (COMPARACAO)
>= (MAIOR IGUAL)
<= (MENOR IGUAL)
&& (E)
|| (OU)
% (MÓDULO) Pega o resto da divisao;

if else - se senao 

condicao == o que queremos avaliar/validar

if (condicao) {
    o que queremos executar/validar
} else {
     outro condicao
}

if (RESULTADO_CONDICAO_ANTERIOR == 10) {
    o que queremos executar/validar
} else {
     outro condicao
}

$RESULTADO = 10 / 10; 1
$RESULTADO = 10 % 10; 0

*/

/**
 * Exercicio 1;
 * Atribuir um valor para uma variavel chamado numero.
 * e vamos informar ao usuario, se este numero é par ou impar.
 */
 
 echo "<br>";
 echo "<br>";

$numero = 10;

if ($numero % 2 == 0){
    echo "O $numero é par";
}else{
    echo "O $numero é impar";
}
