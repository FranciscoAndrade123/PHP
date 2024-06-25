<?php
function paresImpares($paNumero, $paContar) {
    $paNumero = $paNumero;
    $paContar = $paContar;
    $resultado = "";

    if ($paNumero == 1 && $paContar == 5) {
        while ($paNumero <= $paContar) {
            if ($paNumero % 2 == 0) {
                $resultado .= $paNumero . " es par  " . "<br>";
            } else {
                $resultado .= $paNumero . " es impar  " . "<br>";
            }
            $paNumero++;
        }
        return $resultado;
    } else {
        return "No se puede realizar el ejercicio";
    }
}
?>