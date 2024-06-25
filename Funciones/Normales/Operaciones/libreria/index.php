<?php
function operaciones($poperador,$pnumeroUno,$pnumeroDos) {
    $operador=$poperador;
    $pnumeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
    if ($operador == "suma") {
       $operacionResultado = suma2($pnumeroUno,$pnumeroDos);
    }else if ($operador == "resta") {
       $operacionResultado = resta2($pnumeroUno,$pnumeroDos);
    }else if ($operador == "multiplicacion") {
       $operacionResultado = multiplicacion2($pnumeroUno,$pnumeroDos);
    }else if ($operador == "division") {
       $operacionResultado = division2($pnumeroUno,$pnumeroDos);
    }else{
       $operacionResultado = "Error!!! no se puede operar";
    }
    return $operacionResultado;
 }

 function suma2($pnumeroUno,$pnumeroDos){
    $pnumeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
    $sumar = $pnumeroUno + $pnumeroDos;
    return $sumar;
 }
 function resta2($pnumeroUno,$pnumeroDos){
    $pnumeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
 
    $restar = $pnumeroUno - $pnumeroDos;
    return $restar;
 }
 function multiplicacion2($pnumeroUno,$pnumeroDos){
    $pnumeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
 
    $multiplicar = $pnumeroUno * $pnumeroDos;
    return $multiplicar;
 }
 function division2($pnumeroUno,$pnumeroDos){
    $pnumeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;
 
    $dividor = $pnumeroUno / $pnumeroDos;
    return $dividor;
 }



?>