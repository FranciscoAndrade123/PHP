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
        echo("La salud de la persona calculada en  es " . saludPersona(30,50000)) . "<br>";
        echo("La pensión de la persona calculada en  es " .  pensionPersona(30,50000)) . "<br>";
        echo("El arl de la persona calculada en  es " . arlPersona(30,50000)) . "<br>";
        echo("El de deducible de la persona calculada en  es " . deduciplePersona(30,50000)) . "<br>";
        echo("El total es " .  totalSueldo(30,50000));
    ?>
</body>
</html>