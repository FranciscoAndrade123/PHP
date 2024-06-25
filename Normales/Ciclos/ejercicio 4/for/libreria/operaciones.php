<?php

    $numero=9;

    for ($contar = 1; $contar <= 5; $contar++) {
        $resultado=$contar*$numero;
    if($resultado % 2 == 0){
        echo $resultado." es par <br>";

    }else{
        echo $resultado. " es impar <br>";
        }
    }
?>