<?php
    $arreglo =[1,2,3,4,5,6,7,8,9,10];
    $cantidad =count($arreglo);      
    $par=[];
    $impar=[];
    for($interar=0;$interar<$cantidad;$interar++){
        if($arreglo[$interar]%2==0){
            array_push($par,$arreglo[$interar]);
        }else{
            array_push($impar,$arreglo[$interar]);
        }
    }
    echo "Valores del array ".print_r($arreglo)."<br>";
    echo "Estos valores son pares: " . implode(", ", $par) . "<br>";
    echo "Estos valores son impares: " . implode(", ", $impar) . "<br>";
?>