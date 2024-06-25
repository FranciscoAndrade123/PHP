<?php
$contar;
$numero=5;
for ($contar = 1; $contar<= $numero; $contar++){
    if($contar % 2==0){
        echo $contar." es par <br>";
    }else{
        echo $contar. " es impar <br>";
    }
}

?>