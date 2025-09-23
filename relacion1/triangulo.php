<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Triangulo</title>
</head>
<body>
    <h1>Triangulo fachero</h1>

    <?php

        $lado1 = 3.3; //Si queres que sean double o float pon .0 
        $lado2 = 4.0;
        $lado3 = 4.0;

        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "Es equilatero";
        } else if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
            echo "Es isoceles"; 
        }else {
           echo "Es escaleno";
        }
        
    ?>
</body>
</html>