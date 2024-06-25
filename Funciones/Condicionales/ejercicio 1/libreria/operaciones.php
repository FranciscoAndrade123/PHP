<?php
function saberEdad($paEdad){
    $paEdad = $paEdad;
     $mayorEdad = 17;
    if($paEdad>$mayorEdad){
         $mostrar = "Eres mayor de edad";
    }else{
        $mostrar = "Eres menor de edad ";
    }
     return($mostrar);
}
?>