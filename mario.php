<?php
/**
 * Codigo PHP para crear piramide de Mario Bros
 */
$var = "*"; // bloques

$space = " "; // espacios

$increment = 1; // incremento de 1
$blocks = 12;    // tamaño de la piramide

for($increment; $increment <= $blocks; $increment++):
    //  se imprimen los espacios para crear la piramide hacia la derecha
    for($s=$blocks; $s>=$increment; $s--){
        echo $space;
    }
    // se imprimen los bloques de la piramide
    for($i=0; $i<$increment; $i++){
        echo $var;
    }
    //  se imprime un bloque y salto para darle la forma
    echo "*\n";
endfor;
