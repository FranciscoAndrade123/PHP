<?php

 
 function tablaDel9($paNumero,$paMulti){
     $paNumero = $paNumero;
     $paMulti = $paMulti;
     $mostrar = "";
 
     if($paNumero === 1 and $paMulti === 9){
         while($paNumero<=5){
             $resultado = $paNumero * $paMulti;
             if($resultado%2 === 0){
                 $mostrar .= $paNumero . "X" . $paMulti . "=" . $resultado . " Es par en parametros while" . "<br>";
             }else{
                 $mostrar .= $paNumero . "X" . $paMulti . "=" . $resultado . " Es impar en parametros  while" . "<br>";
             }
            $paNumero++;
         }
     }else{
         $mostrar = "Error";
     }
     return($mostrar);
 }

?>