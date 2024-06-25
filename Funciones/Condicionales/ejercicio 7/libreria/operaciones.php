<?php


function nota1($panot){
    $panot=$panot;
     $resultado=$panot*0.2;
    return $resultado ;
}
function nota2($panot){
    $panot=$panot ;
     $resultado=$panot*0.35 ;
    return $resultado ;
}
function nota3($panot){
    $panot=$panot ;
     $resultado=$panot*0.45 ;
    return $resultado ;
}

function total($panot1, $panot2, $panot3) {
     $resultado1 = nota1($panot1);
     $resultado2 = nota2($panot2);
     $resultado3 = nota3($panot3);
     $total = $resultado1 + $resultado2 + $resultado3;
     $mostrar;

    if ($total > 4.5) {
        $mostrar = "La nota es superior";
    } else if ($total > 3.5) {
        $mostrar = "La nota es buena";
    } else if ($total >= 3.0) {
        $mostrar = "La nota es media";
    } else {
        $mostrar = "La nota es mala";
    }
    return $mostrar;
}

?>