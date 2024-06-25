<?php
$salario= 1500000;
$dias=31;
$valorDia;
$salud;
$pension ;
$arl;
$transporte;
$salarioMin =1300000;
$deducible;
$valorDia=$salario/$dias;
$salario= $dias*$valorDia;
echo "salario de la persona es " . $salario ."<br>";


if($salarioMin*2<$salario){
    $salario=$salario+$transporte;
}
else{
    $salario=$salario+0;
}

$salud = $salario*0.12;
$pension = $salario*0.16;
$arl = $salario*0.052;
echo "la salud: " . $salud ."<br>";
echo "la pension: " . $pension ."<br>";
echo "el arl: " . $arl ."<br>";

if($salarioMin*4<$salario){
 $salario=$salario * 0.04;
}
else{
   $salario = $salario + 0;
}

$deducible= $salud+$pension+$arl;
$salario= $salario-$deducible;
echo "total de pagar: " . $salario."<br>" ;
?>