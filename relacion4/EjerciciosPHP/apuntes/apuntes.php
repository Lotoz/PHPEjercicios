<?php

declare(strict_types=1); // Esto obliga lo tipos
$mensaje = "hola";
$mensaje = 34.5;

function swap(int &$a, int &$b): void //Para especificar el tipo que devuelve la funcion
{ //Los parametros van a cambiar de valor
    $media = $a;
    $a = $b;
    $b = $media;
}
$uno = 3.24;
$dos = 2.24;
swap($uno, $dos);
//Cuando usa tipos en php, el tipo estricto de tipo 1. No puede ser otra cosa. ?string = string o null, el interrogante es que admite null

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
    echo $uno . " " . $dos;
    ?>
</body>

</html>