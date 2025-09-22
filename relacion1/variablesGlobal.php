<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ejercicio 3 - Superglobales</title>
</head>
<body>
    
    
    <h1>Variables Superglobales</h1>

    <?php

    /*
        ‘DOCUMENT-ROOT’
        ‘PHP-SELF’
        ‘SERVER-NAME’
        'SERVER_SOFTWARE'
        'SERVER_PROTOCOL'
        'HTTP_HOST'
        'HTTP_USER_AGENT'
        'REMOTE_ADDR'
        'REMOTE_PORT'
        'SCRIPT_FILENAME'
        'REQUEST_URI'

    */

        // muestra, en forma de lista no enumerada, para $_SERVER
        echo "<ul>";

        foreach ($_SERVER as $k => $v) {
            echo "<li>'", $k, "'</li>";
        }

        echo "</ul><br><hr><<br>";

        // volcados
        echo var_dump($_SERVER); // muestra información estructurada de expresiones, incluytendo el tipo y el valor
        echo "<br><hr><br>".print_r($_SERVER); // muestra informaciñon de una variable de forma legible para humanos

    ?>

</body>
</html>