<?php

$lado1=3;
$lado2=7;
$lado3=15;

$area1= $lado1*$lado1;
$area2= $lado2*$lado2;
$area3= $lado3*$lado3;

if($area1==$area2 & $area2==$area3 & $area3==$area1 ){
 echo "las areas son iguales";
}
else{
    if($area1>$area2 & $area1>$area3){
        echo "area del cuadrado uno es la mayor ".$area1;
    }
    else{
        if($area2>$area1 & $area2>$area3){
        echo"area del cuadrado dos es la mayor ". $area2;
        }
    else{
        echo "area del cuadrado tres es el mayor ". $area3;
    }
    }
}
?>