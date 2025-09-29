<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Binarios 2</title>
</head>

<body>
    <?php
    #En esta version del programa haremos quee no solo lo convierta en binario, si no tambien
    #que lo convierta en octal y en hexadecimal
    $numero = 255;
    #usamos lo del ejercicio anterior
    $numeroPrint = $numero;
    $binario = "";
    while ($numero >= 1) {
        #Vamos concatenando el resto de la division entre 2 y actualizando el numero dividiendolo entre 2
        #El (int) es para que nos devuelva un numero entero, ya que php
        $binario = ($numero % 2) . $binario;
        #Actualizamos el numero
        $numero = (int)($numero / 2);
    }
    echo "El numero '$numeroPrint' en binario es: " . $binario;

    #Ahora hacemos lo mismo pero para octal
    $numero = $numeroPrint;
    $octal = "";
    while ($numero >= 1) {
        $octal = ($numero % 8) . $octal;
        $numero = (int)($numero / 8);
    }
    echo "<br>El numero '$numeroPrint' en octal es: " . $octal;

    #Y por ultimo hacemos lo mismo pero para hexadecimal
    $numero = $numeroPrint;
    $hexadecimal = "";
    while ($numero >= 1) {
        $resto = $numero % 16;
        #Si el resto es mayor que 9, le asignamos la letra correspondiente
        if ($resto > 9) {
            switch ($resto) {
                case 10:
                    $resto = "A";
                    break;
                case 11:
                    $resto = "B";
                    break;
                case 12:
                    $resto = "C";
                    break;
                case 13:
                    $resto = "D";
                    break;
                case 14:
                    $resto = "E";
                    break;
                case 15:
                    $resto = "F";
                    break;
            }
        }
        $hexadecimal = $resto . $hexadecimal;
        $numero = (int)($numero / 16);
    }
    echo "<br>El numero '$numeroPrint' en hexadecimal es: " . $hexadecimal;

    ?>
</body>

</html>