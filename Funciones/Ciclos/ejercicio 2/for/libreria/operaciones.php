<?php
 
function pareEimparFor($paNumero, $paContar){
    $paNumero = $paNumero;
    $paContar = $paContar;
    $resultado = "";
    
    if($paNumero === 1 and $paContar === 5){
        for( $numero = $paNumero ; $numero <= $paContar ; $numero++){
            if($numero%2 === 0){
                $resultado .=  $numero . " Es par en parametros For " . "<br>";
            }else{
                $resultado .=  $numero . " Es impar en parametros For " ."<br>";
            }
        }
        return($resultado);
    }else{
        return "No se puede realizar el ejercicio";
    }
}

?>