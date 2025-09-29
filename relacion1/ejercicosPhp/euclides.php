<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Ecluides</title>
</head>

<body>
    <h1>Euclides</h1>
    <?php
    #El maximo comun divisor de ambos numeros son los numeros que tienen en comun 2

    $dividendo  = 20;
    $divisor = 6;
    #If de divisores y ver cual es mayor
    #si es mayor se hace
    #Si es menor no
    if ($dividendo  >= $divisor && $dividendo > 0 && $divisor > 0) {
        $cociente = 0;

        while ($dividendo >= $divisor) {
            $dividendo -= $divisor;
            $cociente++;
        }

        echo "El cociente es ", $cociente, " y el resto es ", $dividendo;
    } else {
        echo "No puede el divisor ser mayor al dividendo";
    }
    ?>
</body>

</html>