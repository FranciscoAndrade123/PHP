<?php
function promedioTresNotas($paNot1,$paNot2,$paNot3){
    $paNot1=$paNot1 ;
    $paNot2=$paNot2 ;
    $paNot3=$paNot3;
    $suma = $paNot1 + $paNot2 + $paNot3;
    $promedio= $suma/3;
    return $promedio;
   }
?>