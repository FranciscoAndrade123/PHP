<?php
 function porcentaje1($not1){
    $resul1;
    $not1 = $not1;
    $resul1 = $not1 * 0.3;
    return $resul1;
}

function porcentaje2($not2){
    $resul2;
    $not2 = $not2;
    $resul2 = $not2 * 0.3;
    return $resul2;
}

function porcentaje3($not3){
    $resul3;
    $not3 = $not3;
    $resul3 = $not3 * 0.4;
    return $resul3;
}

function sumaDePromedio($not1,$not2,$not3){
    $not1=$not1;
    $not2=$not2;
    $not3=$not3;
    $suma ;
    $suma =  porcentaje1($not1) + porcentaje2($not2) + porcentaje3($not3);
    return $suma;
}



?>