<?php

$a = 5;
$b = 3;

$a = $a + $b; // Soma
$b = $a - $b; // Subtrai o valor de b do novo valor de a
 
if($a == $b){
    echo 'os valores sao iguais';
}elseif ($a === $b){
    echo 'os valores sao diferentes';
}elseif ($a != $b){
    echo 'os valores sao diferentes';
}elseif ($a !== $b){
    echo 'os valores sao diferentes';
}elseif ($a < $b){
    echo 'a é menor que b';
}elseif ($a > $b){
    echo 'a é maior que b';
}elseif ($a <= $b){
    echo 'a é menor ou igual a b';
}