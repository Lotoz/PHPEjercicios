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
        //Se puede darle a la constante de este modo el valor con la respuesta de algo
        $algo = 3.1416;
        //Constantes; esta es mas nueva y da mas libertad de que el valor puede ser no conocido hasta la ejecucion
        const PI = $algo;
        //Segunda forma de declarar una constante, es el modo original
        define("NOMBRE", "LOTOZ");
        //Se puede poner una variable con color
        $claro = "azul";
        // Variable de una variable dentro de otra
        //Es para desviar y que pille otro dato, una funcion de disfurcacion de datos para variabilidad
        $$color = $claro;
        var_dump($v1);
        var_dump($v2);
        var_dump($v3);
        var_dump($v4);

        printf("<br>String: %s - Entero: %d - Booleano: %s - Flotante: %.2f", $v1, $v2, $v3, $v4);

    ?>

</body>
</html>