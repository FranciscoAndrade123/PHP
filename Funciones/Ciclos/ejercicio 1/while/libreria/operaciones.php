<?php
function contar1al5($paContar, $paNumero) {
    if ($paContar == 1 and $paNumero == 5) {
        $resultado = "";  
        
        while ($paContar <= $paNumero) {
            $resultado .= $paContar . "<br> "; 
            $paContar++;
        }
        
        return $resultado;
    } else {
        return "No se puede realizar el ejercicio";
    }
}
?>
