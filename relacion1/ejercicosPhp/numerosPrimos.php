<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Numeros Primos</title>
</head>

<body>
    <h1>Numeros primos</h1>
    <?php
    #Primo es aquel numero que solo se puede dividr por si mismo 
    $num = 0;
    $i = 1;
    $flag = true;
    if ($num <= 1) {
        echo "Solo esta definido para numeros naturales";
    } else {
        do {
            if ($num % $i == 0 && $i > 1) {
                $flag = false;
            }
            $i++;
        } while (!$flag && $i < $num);

        if ($i >= $num) {
            echo "Es primo $num y su divisor es ", $i - 1;
        } else {
            printf("No es primo $num");
        }
    }




    ?>
</body>

</html>