<?php


function areasCuadrado($palado1) {
    $palado1 = $palado1;
    $areaCuadrado = $palado1 * $palado1;
    $areaCuadrado = "El area del cuadrado  es " . $areaCuadrado;
    return($areaCuadrado);
}

function areasRectangulo($palado1,$palado2){
    $palado1 = $palado1;
    $palado2 = $palado2;
    $areaRectangulo = $palado1 * $palado2;
    $areaRectangulo = "El area del rectangulo  es " . $areaRectangulo;
    return( $areaRectangulo);
}

function areasTriagulo($palado1,$palado2){
    $palado1 = $palado1;
    $palado2 = $palado2;
    $areaTriangulo = ($palado1*$palado2)/2;
    $areaTriangulo = "El area del triangulo  es " . $areaTriangulo;
    return($areaTriangulo);
}

function saberArea($palado1, $palado2, $paArea) {
    $palado1 = $palado1;
    $palado2 = $palado2;
    $paArea = $paArea;
    if ($paArea == "Cuadrado") {
        $area = areasCuadrado($palado1);
    } else if ($paArea == "Rectangulo") {
        $area = areasRectangulo($palado1, $palado2);
    } else if ($paArea == "Triangulo") {
        $area = areasTriagulo($palado1, $palado2);
    } else {
        $area = "Error, esta area geometrica no se encuentra";
    }
    return $area;
}

?>