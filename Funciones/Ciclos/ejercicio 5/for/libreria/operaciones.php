<?php


function tablaDel1al5For($paNum, $paLimite) {
    $pares = 0;
    $impares = 0;
    $mostrar = "";
    $resultado;
     $paNum=$paNum ;
     $paLimite=$paLimite ;

    for ( $numero = $paNum; $numero <= $paLimite; $numero++) {
        for ( $multiplicador = 1; $multiplicador <= 5; $multiplicador++) {
            $resultado = $numero * $multiplicador;
            if ($resultado % 2 === 0) {
                $mostrar .= $numero . " X " . $multiplicador . " = " . $resultado . " (Buzz en parametros For)  " . "<br>";
                $pares++;
            } else {
                $mostrar .= $numero . " X " . $multiplicador . " = " . $resultado . " (Bass en parametros For) ". "<br>";
                $impares++;
            }
        }
    }
    return $mostrar . "Cantidad de pares: " . $pares . "<br>"."Cantidad de impares: " . $impares;
}



?>