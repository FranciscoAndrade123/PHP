<?php
$par = [];
$impar = [];
$sumasimpar = 0;
$num3 = 1;
$sumaspar = 0;
$matriz = [];
$matrizx = [];
$matrizx[]="&nbsp;";

for ($num1 = 0; $num1 < 5; $num1++) {
    $matriz[$num1] = [];
    for ($num2 = 0; $num2 < 5; $num2++) {
        $matriz[$num1][$num2] = $num3 * 5;
        $num3++;
        if ($matriz[$num1][$num2] % 2 == 0) {
            $par[] = $matriz[$num1][$num2];
        } else {
            $impar[] = $matriz[$num1][$num2];
        }
        if ($num1 === $num2 || $num1 + $num2 === 4) {
            $matrizx[]= $matriz[$num1][$num2] . "&nbsp;&nbsp;&nbsp;";
        } else {
            $matrizx []= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
    $matrizx[]= "<br>";
}

$sumaspar = array_sum($par);
$sumasimpar = array_sum($impar);

echo "Matriz: <br>";
foreach ($matriz as $fila) {
    echo implode(", ", $fila) . "<br>";
}
echo "Valores pares: " . implode(", ", $par) . "<br>";
echo "Valores impares: " . implode(", ", $impar) . "<br>";
echo "Suma de pares: " . $sumaspar . "<br>";
echo "Suma de impares: " . $sumasimpar . "<br>";
echo "Matriz en x: <br>" ;
echo implode("", $matrizx)
?>
