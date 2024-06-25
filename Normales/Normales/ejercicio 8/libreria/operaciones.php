<?php
$diasTrabajados=30;
$valorDia=70000;

$sueldo= $diasTrabajados*$valorDia; 
$salud= $sueldo * 0.12;
$pension= $sueldo * 0.16;
$arl= $sueldo * 0.052;
$descuento= $salud+$pension+$arl;

$pagoTotal= $sueldo-$descuento;

?>