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
    echo("Salario de la persona sin subsidio de transporte: ".salarioPersonaYtransporte(2500000)) . "<br>";
    echo("Salud: ".salud(2500000)) . "<br>";
    echo("arl: ".arl(2500000)) . "<br>";
    echo("pension: ".pension(2500000)). "<br>";
    echo("deducible: ".deducible(2500000)). "<br>";
    echo("Retencion: ".retencion(2500000)). "<br>";
    echo("Total: ". totalPagar(2500000)). "<br>";
    ?>
</body>
</html>