<?php
    $contar=0;
    $numero=5;

    while($contar < $numero){
        $contar = $contar +1 ;
    if($contar % 2==0){
        echo $contar." es par <br>";
    }else{
        echo $contar." es impar <br>";
        }
    }
?>