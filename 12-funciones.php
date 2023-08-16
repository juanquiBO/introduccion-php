<?php

function sumarDosNumeros($numero1, $numero2){
    return $numero1 + $numero2   ;
}

$suma = sumarDosNumeros(4,5);
echo $suma . '<br>';

$nuemro1 = 5;

$nuemro2 = 10;

$suma = $nuemro1 + $nuemro2;
echo $suma;
'<br>';

echo sumarDosNumeros(7,9) . '<br>';

echo sumarDosNumeros(56,9) . '<br>';

function saludo(){
    echo 'hola mundo desde la funcion';
}

saludo();