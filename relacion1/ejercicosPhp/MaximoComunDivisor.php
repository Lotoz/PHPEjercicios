<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/relacion1/playamar.png" type="image/x-icon">
    <title>Maximo comun divisor</title>
</head>

<body>
    <h1>Maximo comun divisor</h1>
    <?php
    $num1 = 12;
    $num2 = 12;
    if ($num1 <= 0 && $num2 <= 0) {
        echo "No puede realizarse porque uno es cero o negativo";
    } else {
        while ($num1 != $num2) {
            if ($num1 > $num2) {
                $num1 -= $num2;
            } else {
                $num2 -= $num1;
            }
        }
        echo "El MCD es $num1";
    }

    ?>
</body>

</html>