<?php
    include("./libreria/operaciones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      echo(saberArea(2, 6, "Rectangulo")) . "<br>";
      echo(saberArea(2, 6, "Cuadrado")) . "<br>";
      echo(saberArea(2, 6, "Triangulo")) . "<br> ";
      echo(saberArea(2, 6, "CIRCULO")) . "<br>";
      
    ?>
</body>
</html>