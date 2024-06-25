<?php

function contar1al5For($paNumero, $paContar) {
    $paNumero=$paNumero;
    $paContar=$paContar;
    $resultado = "";


    if ($paNumero === 1  and $paContar === 5) {
        for ( $i = $paNumero; $i <= $paContar; $i++) {
            $resultado .= $i . "<br> ";
        }
        return $resultado;
    } else {
        return "No se puede realizar el ejercicio";
    }
}
?>