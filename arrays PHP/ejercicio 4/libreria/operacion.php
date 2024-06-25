<?php
$matrix = [];
$matrixX1 = [];
$matrixX2 = [];
$matrixX3 = [];
$B = [];
$I = [];
$N = [];
$G = [];
$O = [];
$numero = 1;

// Creación de la matriz y las columnas B, I, N, G, O
for ($fila = 0; $fila < 5; $fila++) {
    $matrix[$fila] = [];
    for ($columna = 0; $columna < 5; $columna++) {
        $matrix[$fila][$columna] = $numero * 2;

        if ($columna === 0) {
            array_push($B, $matrix[$fila][$columna]);
        } elseif ($columna === 1) {
            array_push($I, $matrix[$fila][$columna]);
        } elseif ($columna === 2) {
            array_push($N, $matrix[$fila][$columna]);
        } elseif ($columna === 3) {
            array_push($G, $matrix[$fila][$columna]);
        } elseif ($columna === 4) {
            array_push($O, $matrix[$fila][$columna]);
        }
        $numero++;
    }
}

// Creación de la X1
for ($fila = 0; $fila < 3; $fila++) {
    for ($columna = 0; $columna < 3; $columna++) {
        if ($fila == $columna || $fila + $columna == 2) {
            array_push($matrixX1, $matrix[$fila][$columna]);
        }
    }
}

// Creación de la X2
for ($fila = 2; $fila < 5; $fila++) {
    for ($columna = 0; $columna < 3; $columna++) {
        if ($fila + $columna == ($columna + 1) * 2 || $fila + $columna == 4) {
            array_push($matrixX2, $matrix[$fila][$columna]);
        }
    }
}

// Creación de la X3
for ($fila = 0; $fila < 3; $fila++) {
    for ($columna = 2; $columna < 5; $columna++) {
        if ($fila + $columna == ($fila + 1) * 2 || $fila + $columna == 4) {
            array_push($matrixX3, $matrix[$fila][$columna]);
        }
    }
}

// Impresión de resultados
echo "Matrix:" . "<br>";
foreach ($matrix as $fila) {
    echo implode(", ", $fila) . "<br><br>";
}

echo "B: " . implode(", ", $B) . "<br>  ";
echo "I: " . implode(", ", $I) . "<br> ";
echo "N: " . implode(", ", $N) . "<br> ";
echo "G: " . implode(", ", $G) . "<br> ";
echo "O: " . implode(", ", $O) . "<br> <br>";

echo "X1: " . implode(", ", $matrixX1) . "<br> <br>  ";
echo "X2: " . implode(", ", $matrixX2) . "<br><br> ";
echo "X3: " . implode(", ", $matrixX3) . "<br> <br>";
?>
