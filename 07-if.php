<?php

$edad = 18;

if($edad>=20){
    echo "El usuario es mayor de edad";
}else{
    echo "El usuario es menor de edad";
}

$dia=7;

if($dia ==1){
    echo "lunes";
}elseif($dia ==2){
    echo "martes";
}elseif($dia ==3){
    echo "miercoles";
}else{
    echo "domingo";
}

if($dia === 7){
    echo 'cumple';
}else{
    echo 'no cumple';
}

//and y or

if($dia == 7 && $dia==2){
    echo 'no se ejecuta';
}else{
    echo 'no cumple la condicion';
}

if($dia == 7 || $dia==2){
    echo 'se cumple con la condicion';
}else{
    echo 'no cumple la condicion';
}

$booleano = false;
if(!$booleano){
    echo 'cumple';
}else{
    echo 'no cumple';
}