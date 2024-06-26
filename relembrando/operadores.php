<?php

// Expressão -> instrução de código 
// EX: Soma, Baskhara, impressão de texto, regras de negocio, login

// Operadores -> Recursos para compor expressões
// EX: < , > , >= , == , = , + , *, **


// Ordem dos operadores é cfe a matematica
// 2 + 2 * 6 = 14

function contaDefault($a, $b, $c)
{

    $contaDefault = $a + $b * $c;
    echo "Conta default: " . $contaDefault;
}

contaDefault(2, 2, 6);

echo "<br>";
echo "<br>";

function contaDif($a, $b, $c)
{

    $contaDif = ($a + $b) * $c;
    echo "Conta dif: " . $contaDif;
}

contaDif(2, 2, 6);
echo "<br>";
echo "<br>";

//AUTOCAST

function autoCast($var1, $var2)
{

    echo $divisao = $var1 / $var2; //ceil() para arredondar para cima
    echo "<br>";
    echo "<br>";

}


autoCast(5, 2);

function getTypee($var1, $var2)
{

    echo $expressao = $var1 * $var2;
    echo "<br>";

    echo "gettype: " . gettype($expressao);
    echo "<br>";
    echo "<br>";

}

getTypee("5", 12);



//OPERADOR DE MODULO

function operadorModulo($var1, $var2)
{

    echo "Modulo: " . $modulo = $var1 % $var2 ." (".$var1." e ".$var2.")";


}

operadorModulo(6, 2);
echo "<br>";
operadorModulo(5, 2);
echo "<br>";
echo "<br>";

//Operador de exponenciação

function operadorExponenciacao($var1, $var2)
{

    echo "Exponenciação: " . $exponenciacao = $var1 ** $var2;
    echo "<br>";
    echo "<br>";

}

operadorExponenciacao(5, 2);

//Operadores de comparação

/*
Igualdade    == 
Idêntico a   ===
Diferente    !=
Não idêntico !==
Maior        >
Maior igual  >=
Menor        <
Menor igual  <=
*/


function igualdade($var1, $var2)
{


    if ($var1 == $var2) {
        echo "Verdadeiro Igualdade";
        echo "<br>";
    } else {
        echo "Falso Igualdade";
        echo "<br>";
    }
}

igualdade(2, 2);

igualdade(2, "2");
echo "<br>";

function identico($var1, $var2)
{
    if ($var1 === $var2) {
        echo "Verdadeiro Idêntico";
        echo "<br>";
    }
}

identico(2, "2");

identico(2, 2);
echo "<br>";

function diferente($var1, $var2)
{
    if ($var1 != $var2) {
        echo "Verdadeiro diferente";
        echo "<br>";
    } else {
        echo "Falso diferente";
        echo "<br>";
    }
}

diferente(2, "2");

diferente(2, 1);
echo "<br>";

function naoIdentico($var1, $var2)
{
    if ($var1 !== $var2) {
        echo "Verdadeiro não idêntico";
        echo "<br>";
    }
}

naoIdentico(2, "2");

naoIdentico(2, 2);
echo "<br>";

function maior($var1, $var2)
{
    if ($var1 > $var2) {
        echo "Verdadeiro Maior";
        echo "<br>";
    } else {
        echo "Falso Maior";
        echo "<br>";
    }
}

maior(2, 2);

maior(2, 1);
echo "<br>";

function maiorIgual($var1, $var2)
{
    if ($var1 >= $var2) {
        echo "Verdadeiro Maior igual";
        echo "<br>";
    } else {
        echo "Falso Maior Igual";
        echo "<br>";
    }
}

maiorIgual(2, 2);

maiorIgual(2, 1);
echo "<br>";

function menor($var1, $var2)
{
    if ($var1 < $var2) {
        echo "Verdadeiro menor igual";
        echo "<br>";
    } else {
        echo "Falso menor Igual";
        echo "<br>";
    }
}

menor(2, 2);

menor(2, 1);
echo "<br>";

function menorIgual($var1, $var2)
{
    if ($var1 >= $var2) {
        echo "Verdadeiro menor igual";
        echo "<br>";
    } else {
        echo "Falso menor Igual";
        echo "<br>";
    }
}

menorIgual(2, 2);

menorIgual(2, 1);
echo "<br>";


//OPERADORES LÓGICOS

// && AND
// || OR
//  ! NOT

function operadorAND($var1,$var2){
 
    if($var1 >= 2 && $var2 <= 8){
        echo "operador AND TRUE";
        echo "<br><br>";
    }

}

operadorAND(3,7);

function operadorOR($var1,$var2){
 
    if($var1 > 2 || $var2 <= 8){
        echo "operador OR TRUE";
        echo "<br><br>";
    }

}

operadorOR(1,7);

function operadorNOT($var1){
 
    if(!($var1 >= 2)){
        echo "operador NOT TRUE";
        echo "<br><br>";
    }

}

operadorNOT(1);

// OPERADOR CAST (CONVERSÃO)
// $var1  = (int) "34"; 
// if($var1 === 34 ) = true


/** OPERADORES DE ATRIBUIÇÃO
 * 
 *=
 * -=
 * +=
 * /=
 * *= 
 * $var1 = 1
 * $var1 += 10 (11)
 */

 /**
  * OPERADOR TERNÁRIO
  * echo 20 > 10 ? "TRUE"  
  * echo 10 > 20 ? "FALSE"
  */