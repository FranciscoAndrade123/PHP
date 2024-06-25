<?php

function tablaDel9For($paNumero,$paMulti){
    $paNumero = $paNumero;
    $paMulti = $paMulti;
    $mostrar = "";

    if($paNumero === 1 and $paMulti === 9){
        for( $numero = $paNumero ; $numero <= 5 ; $numero++){
            $resultado = $numero * $paMulti ;
            if($resultado%2 === 0){
                $mostrar .= $numero . "X" . $paMulti . "=" . $resultado . " Es par en parametros For " . "<br>";
            }else{
                $mostrar .= $numero . "X" . $paMulti . "=" . $resultado ." Es impar en parametros For ". "<br>";
            }
        }
    }else{
        $mostrar = "Error";
    }
    return($mostrar);
}
?>