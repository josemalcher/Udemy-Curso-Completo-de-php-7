<?php
$a = 10;
function trocaValor(&$a){ //Passagem de parâmetro por referência (&$a)
//function trocaValor($a){
    $a += 50;
    return $a;
}
echo trocaValor($a); // 60
echo "<br>";
echo $a; // 10 ($a)
echo $a; // 60 (&$a)