<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Factorial</h1>
    <?php
        #con un if controlamos
         $num = 5;
        if ($num < 0) {
            printf("El numero debe ser mayor a ceor");
        } else {
            $factorial = 1;

            for ($i = $num; $i > 1 ; $i--) { 
                $factorial *= $i;
                echo "El factorial es ", $factorial,  "<br/>";
            }
        }
            
       
        #Cuando es producto se inicia en uno y cero para la suma
       
    ?>
</body>
</html>