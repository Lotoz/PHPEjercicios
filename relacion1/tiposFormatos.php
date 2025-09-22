<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Tipos y Formatos</title>
</head>
<body>

    <h1>Trabajando con Tipos y Formatos de Salida</h1>

    <?php

        $v1 = "hola";
        $v2 = 24;
        $v3 = true;
        $v4 = 5.34;

        var_dump($v1);
        var_dump($v2);
        var_dump($v3);
        var_dump($v4);

        printf("<br>String: %s - Entero: %d - Booleano: %s - Flotante: %.2f", $v1, $v2, $v3, $v4);

    ?>

</body>
</html>