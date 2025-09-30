<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/relacion1/playamar.png" type="image/x-icon">
    <title>Suma de numeros naturales</title>
</head>

<body>
    <h1>Suma de numeros naturales</h1>
    <?php
    $numero = 10;
    $suma = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $suma += $i; //Equivalente a $suma = $suma + $i
    }
    echo "La suma de los primeros $numero numeros naturales es: $suma";
    ?>
</body>

</html>