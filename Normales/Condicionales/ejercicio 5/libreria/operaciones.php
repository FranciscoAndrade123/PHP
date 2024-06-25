<?php
$anioNac1 = 2005;
$anioNac2 = 2002;
$anioNac3 = 2014;
$anioAc = 2024;


$edad1 = $anioAc - $anioNac1;
$edad2 = $anioAc - $anioNac2;
$edad3 = $anioAc - $anioNac3;


function verificarEdad($edad) {
    if ($edad > 17) {
        return "es mayor de edad.";
    } else {
        return "es menor de edad.";
    }
}


echo "Persona 1 " . verificarEdad($edad1) . "<br>";
echo "Persona 2 " . verificarEdad($edad2) . "<br>";
echo "Persona 3 " . verificarEdad($edad3) . "<br>";


$promedio = ($edad1 + $edad2 + $edad3) / 3;
if ($promedio > 17) {
    echo "El promedio cumple con la mayoría de edad.";
} else {
    echo "El promedio no cumple con la mayoría de edad.";
}
?>
