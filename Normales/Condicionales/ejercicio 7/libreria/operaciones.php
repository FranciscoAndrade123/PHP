<?php
$nota1=3.5;
$nota2=4.2;
$nota3=5.0;

$porcentaje1 = $nota1*0.20;
$porcentaje2 = $nota2*0.35;
$porcentaje3 = $nota3*0.45;

$suma=$porcentaje1+$porcentaje2+$porcentaje3;

if($suma>4.5){
    echo"es superior <br>";
} else {
    if($suma<= 4.5){
        echo "es buena <br>";
    } else {
        if($suma<= 3.5){
            echo "es media <br>";
        } else{
            echo "es mala <br>";
        }
    }
    
}
echo "Porcentaje 1 :".$porcentaje1  ."<br>". "Porcentaje 2 :".$porcentaje2."<br>"."Porcentaje 3 :".$porcentaje3."<br> suma de porcentajes :". $suma;

?>