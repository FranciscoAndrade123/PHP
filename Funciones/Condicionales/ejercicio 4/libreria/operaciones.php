<?php

function areasCuadrados($palado) {
    $palado=$palado;
     $area = $palado * $palado;
    return $area;
}

function saberCuadrados($palado1, $palado2, $palado3) {
    $palado1=$palado1;
    $palado2=$palado2;
    $palado3=$palado3;
     $area1 = areasCuadrados($palado1);
     $area2 = areasCuadrados($palado2);
     $area3 = areasCuadrados($palado3); 
     $mostrar;

    if ($area1 == $area2 && $area1 == $area3) {
        $mostrar = "Las tres áreas son iguales";
    } else {
        if ($area1 > $area2 && $area1 > $area3) {
            $mostrar = "El área del cuadrado 1 es mayor";
        } else {
            if ($area2 > $area1 && $area2 > $area3) {
                $mostrar = "El área del cuadrado 2 es mayor";
            } else {
                $mostrar = "El área del cuadrado 3 es mayor";
            }
        }
    }
    return $mostrar;
}

?>