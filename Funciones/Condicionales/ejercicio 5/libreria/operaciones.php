<?php
function calcularMayoriaDeEdad($paEdad){ 
    $anioAct = 2024;
    $edad = $anioAct - $paEdad;

 
    if($edad > 17){
        $mostrar = " cumple con la mayoría de edad en parametros";
    }else{
        $mostrar = " no cumple con la mayoría de edad en parametros";
    }
    return $mostrar;
}

function edadesPersonas($paAño1, $paAño2, $paAño3){
    $paAño1 = $paAño1;
    $paAño2 = $paAño2;
    $paAño3 = $paAño3;
    $edad1 = "La primera persona: ";
    $edad2 = "La segunda persona: "; 
    $edad3 = "La tercera persona: ";


    echo($edad1 . calcularMayoriaDeEdad($paAño1));
    echo( $edad2 . calcularMayoriaDeEdad($paAño2));
    echo( $edad3 . calcularMayoriaDeEdad($paAño3)) ;


    $promedio = (calcularMayoriaDeEdad($paAño1)+calcularMayoriaDeEdad($paAño2)+calcularMayoriaDeEdad($paAño3)) / 3;

    if($promedio > 17){
        $aviso = "El promedio de las edades sí cumple la mayoría de edad ";
        return $aviso;
    }else{
        $aviso = "El promedio de las edades no cumple la mayoría de edad ";
        return $aviso;
    }

}

?>
