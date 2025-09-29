<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones a partir de switch</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Calificaciones a partir de un numero (entero)</h1>
    <?php
    ##En teoria es con un switch
    $nota = 1;

    switch ($nota) {
        case 9:
        case 10:
            printf("Sobresaliente");
            break;
        case 7:
        case 8:
            printf("Notable");
            break;
        case 6:
            printf("Bien");
            break;
        case 5:
            printf("Suficiente");
            break;
        case 1: //Si la nota entra por 1,2,3,4 entra ahi
        case 2:
        case 3:
        case 4:
            printf("Suspenso");
            break;
        default:
            printf("Error en el calculo de nota.");
            break;
    }

    ?>
</body>

</html>