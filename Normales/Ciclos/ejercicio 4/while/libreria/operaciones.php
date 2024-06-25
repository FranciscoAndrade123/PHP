<?php
    $contar=0;
    $numero=9;

    while($contar<5){
        $contar++;
        $resultado= $contar * $numero;
    if($resultado % 2 == 0){
        echo $resultado." es par <br>";
    }else{
        echo $resultado. " es impar <br>";   
    }
}
?>