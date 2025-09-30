<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/relacion1/playamar.png" type="image/x-icon">
    <title>Divisores</title>
    <style>
        .divisor {
            color: red
        }

        ;
    </style>
</head>

<body>
    <h1>Divisores numeros</h1>
    <?php
    #Debemos hacer que los numeros divisores salgan con color
    $num = 300;
    if ($num < 1) {
        echo "Si es menor de 1 o 0 no puede tener divisores.";
    } else {
        echo "Los divisores son: <br/>";
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $flag = false;
                printf("<span class='divisor'> $i </span>");
                //echo "<p style= 'color:red'>", $i, "</p>"
            } else {
                echo " ", $i, " ";
            }
        }
    }
    /* Tambien funciona sustituo del span
    do {
             $i++;
              //$i = 1;
    //$flag = true;
        } while (!$flag && $i <= $num);
         */
    ?>
</body>

</html>