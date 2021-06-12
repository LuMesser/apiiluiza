<?php
/*
Operador é um transformador, ou seja, você fornece um ou mais valores e ele o transforma em outro valor. 
*/

$valor = 10;
$valor *= 5;
//echo $valor;

$nome = "Luiza ";
$nome .= "Messerschmidt";
//echo $nome;

//echo 10 / 5;

$valor1 = 10;
$valor2 = 10;

//var_dump($valor1 >= $valor2);

//(expressao) ? (valor verdadeiro) : (valor falso);
($valor1 == $valor2) ? $resultado = true : $resultado = false;
//var_dump($resultado);

$v1 = 10;
$v2 = $v1++;
//echo $v1.' - '.$v2;

$v1 = true;
$v2 = false;
//var_dump(!($v2));

$nome = 'Luiza ';
$sobrenome = 'Messerschmidt';
echo $nome.$sobrenome;