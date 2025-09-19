<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacion 1 - Hola mundo</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Hola mundo en php</h1>
    <h3 style='color:purple'>
        <?php
        $nombre = "Zamira"; //Declaracion de variable,  de tipo (lo deduce, no es fuertemente tipado)
        echo "Hola $nombre <br/>"; // Una variable entre comillas dobles es sustituida por su valor
        echo 'Hola mundo <br/>'; // Puedo usar comillas simples para el eco
        echo 'Hola $nombre <br>'; //Pero como haya variables se debe utilizar comilla doble o
        echo 'Hola ', $nombre, '<br/>'; // Asi detecta la variable y se deba agregar el espacio manualmente porque si no, no lo detecta
        echo "Hola ", strtoupper($nombre); //Se declara asi en mayuscula
        ?>
    </h3>
</body>

</html>