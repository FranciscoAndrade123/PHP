<?php
$pares = 0;
$impares = 0;

$contar1 = 1;

while ($contar1 <= 5) {
    $contar2 = 1;

    while ($contar2 <= 5) {
        $resultado=$contar1*$contar2;
        echo $contar1."x".$contar2. "=".$resultado."<br>";

        if ($resultado % 2 == 0) {
            echo "buzz <br>";
            $pares++;
        } else {
            echo "bass <br>";
            $impares++; 
        }
        $contar2++;
    }
    echo "";
    $contar1++;
}

echo "Cantidad de números pares:".$pares ."<br>";
echo "Cantidad de números impares:".$impares;
?>