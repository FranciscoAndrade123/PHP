<?php

function tabla5($paNumero, $paMultiplicar){
    $paNumero = $paNumero;
    $paMultiplicar = $paMultiplicar;
    $mostrar = "";

    if($paNumero === 1 && $paMultiplicar === 5){
        while($paNumero <= $paMultiplicar){
            $resultado = $paNumero * $paMultiplicar;
            $mostrar .= $paNumero . "X" . $paMultiplicar . "=" . $resultado ." En while" ."<br>";
            $paNumero++;
        }
    } else{
        $mostrar = "Error";
    }
    return $mostrar;
}
?>