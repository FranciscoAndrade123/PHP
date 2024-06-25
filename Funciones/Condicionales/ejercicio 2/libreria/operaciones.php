<?php

   function calcularEdad($paAnioNac){
    $calcular = 2024 - $paAnioNac ;

    if($calcular>17){
        $mostrar= "Es mayor de edad  calculando tu edad " ;
    }else{
      $mostrar= "Es menor de edad  calculando tu edad  " ;
    }
    return($mostrar);
   }

?>