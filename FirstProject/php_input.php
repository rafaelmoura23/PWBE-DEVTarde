<?php

echo "Insira um número: ";$num1=readline(). PHP_EOL;
echo "Insira outro número: ";$num2=readline(). PHP_EOL;

$soma = $num2 + $num1;
$sub = $num1-$num2;
$mult = $num1*$num2;
$div = $num1/$num2;

//$potencia = $num1**$num2;
//echo "Somando estes dois números temos: ".$soma . PHP_EOL;
//echo "A potencia do primeiro elevado ao segundo é: " .$potencia . PHP_EOL;

echo "Agora, escolha uma operação!".PHP_EOL;
echo "1-Somar".PHP_EOL;
echo "2-Subtrair".PHP_EOL;
echo "3-Dividir".PHP_EOL;
echo "4-Multiplicar".PHP_EOL;
$operation=readline(). PHP_EOL;

switch ($operation){
    case 1:
        echo "Soma = ".$soma;
        break;
    case 2:
        echo "Subtração = ".$sub;
        break;
    case 3:
        echo "Divisão = ".$div;
        break;
    case 4:
        echo "Multiplicação = ".$mult;
        break;
    default:
        echo "Insira um número válido";
        break;
}