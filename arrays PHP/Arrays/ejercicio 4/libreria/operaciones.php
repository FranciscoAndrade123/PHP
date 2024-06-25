<?php
$bingo=[];
$iteracion1;
$iteracion2;
$acumulador=0;
$matriz1=[];
$matriz2=[];
$matriz3=[];
$numero1=[];
$numero2=[];
$numero3=[];
$numero4=[];
$numero5=[];


for ($iteracion1 = 0; $iteracion1 < 5; $iteracion1++) {
    $interno=[];
    for ($iteracion2 = 0; $iteracion2 < 5; $iteracion2++) {
        $acumulador=$acumulador+1;
        $interno[$iteracion2]=$acumulador*2;
    }
    $bingo[$iteracion1]=$interno;
}
echo "matriz: <br>";
foreach($bingo as $fila){
    echo implode(",",$fila)."<br>";
};
echo "<br>por letra: <br>";
//letra B
echo "letra B: ";
for($iteracion2=0;$iteracion2<5;$iteracion2++){
    $numero1[]=$bingo[$iteracion2][0];
  
};
echo implode(", ",$numero1);
//LETRA I
echo "<br>letra I: ";
for($iteracion2=0;$iteracion2<5;$iteracion2++){
    $numero2[]=$bingo[$iteracion2][1];
};
echo implode(", ",$numero2);
//LETRA N
echo "<br>letra N: ";
for($iteracion2=0;$iteracion2<5;$iteracion2++){
    $numero3[]=$bingo[$iteracion2][2];
};
echo implode(", ",$numero3);
//LETRA G
echo "<br>letra G: ";
for($iteracion2=0;$iteracion2<5;$iteracion2++){
    $numero4[]=$bingo[$iteracion2][3];;
};
echo implode(", ",$numero4);
//LETRA O
echo "<br>letra O: ";
for($iteracion2=0;$iteracion2<5;$iteracion2++){
    $numero5[]=$bingo[$iteracion2][4];;
};
echo implode(", ",$numero5)."<br>";

for($fila=0;$fila<3;$fila++){
    for($columna=0;$columna<3;$columna++){
        if($fila==$columna || $fila+$columna==2){
            $matriz1 []= $bingo[$fila][$columna];
        }
    }
  }
  for($fila=2;$fila<5;$fila++){
    for($columna=0;$columna<3;$columna++){
        if($fila+$columna==($columna+1)*2 || $fila+$columna==4){
            $matriz2 []= $bingo[$fila][$columna];
        }
    }
  }

  for($fila=0; $fila<3;$fila++){
    for($columna=2; $columna<5;$columna++){
        if($fila+$columna==($fila+1)*2 || $fila+$columna==4){
            $matriz3 []= $bingo[$fila][$columna];
        }
    }
  }
  echo "<br>Matrices:<br>";
    echo "valor en X1: ".implode(",",$matriz1)."<br>";
    echo "valor en X2: ".implode(",",$matriz2)."<br>";
    echo "valor en X3: ".implode(",",$matriz3);

?>