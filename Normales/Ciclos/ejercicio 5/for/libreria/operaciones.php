<?php
$pares = 0;
$impares = 0;

for ($contar1 = 1; $contar1 <= 5; $contar1++) {
    for ($contar2 = 1; $contar2 <= 5; $contar2++) {
        $resultado = $contar1 * $contar2;
        echo $contar1."x".$contar2. "=" .$resultado."<br>";

        if ($resultado % 2 == 0) {
            echo "buzz<br>";
            $pares++;
        } else {
            echo"bass<br>";
            $impares++; 
        }
    }
    echo ""; 
}

echo "Cantidad de números pares: " .$pares;
echo "Cantidad de números impares: ".$impares;

?>