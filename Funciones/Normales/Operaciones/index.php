<?php
include("./libreria/index.php");
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
        var_dump(operaciones("suma",1,2));
        var_dump(operaciones("resta",5,2));
        var_dump(operaciones("multiplicacion",1,2));
    ?>
</body>
</html>