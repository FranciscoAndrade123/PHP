<?php
function tabla5For($paNumero,$paMulti){
    $paNumero=$paNumero ;
    $paMulti=$paMulti ;
    $mostrar = "" ;

    if($paNumero === 1 && $paMulti ===5 ){
        for( $numero = $paNumero; $numero <= $paMulti ; $numero++){
            $resultado = $numero * $paMulti;
            $mostrar .= $numero . "X" . $paMulti . "=" . $resultado . " En parametros for" . "<br>";
        }
    }else{
        $mostrar = "error";
    }
    return ($mostrar);
}
?>