<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Binarios 1</title>
</head>

<body>

    <?php
    #Insertamos un numero natural para pasarlo a binario
    $numero = 8;
    #Hacemos esto porque ese numero lo perderemos con el while
    $numeroPrint = $numero;
    #Php posee una funcion, la cual es decbin, pero no la vamos a usar
    $binario = "";
    #Hacemos un bucle mientras el numero sea mayor o igual que 1
    while ($numero >= 1) {
        #Vamos concatenando el resto de la division entre 2 y actualizando el numero dividiendolo entre 2
        #El (int) es para que nos devuelva un numero entero, ya que php
        $binario = ($numero % 2) . $binario;
        #Actualizamos el numero
        $numero = (int)($numero / 2);
    }
    echo "El numero '$numeroPrint' en binario es: " . $binario;
    ?>

</body>

</html>