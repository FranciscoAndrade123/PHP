<?php

function tablaDel1al5($paTabla,$paLimite) {
    $paTabla = $paTabla;
    $paLimite=$paLimite;
   $pares = 0;
    $impares = 0;
    $mostrar = "";
    $resultado;
    while ($paTabla <= $paLimite) {
         $multiplicador = 1;
        while ($multiplicador <= 5) {
            $resultado = $paTabla * $multiplicador;

            if ($resultado % 2 === 0) {
                $mostrar .= $paTabla . "X" . $multiplicador . "=" . $resultado . " (Buzz en parametros while)". "<br>";
                $pares++;
            } else {
                $mostrar .= $paTabla. "X". $multiplicador. "=". $resultado. " (Bass en parametros while)" . "<br>";
                $impares++;
            }

            $multiplicador++;
        }

        $paTabla++; 
    }

    return $mostrar . "Cantidad de pares: " . $pares . "<br>" . "Cantidad de impares:" . $impares;
}
?>