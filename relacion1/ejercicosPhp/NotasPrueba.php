<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notas</h1>
    <?php
        #Probar con array filter
        $nota = "1";

        const NOTAS = [
                1| 2| 3| 4 => "Suspenso",
                5 => "Suficiente",
                6 => "Aprobado",
                7,8 => "Notable",
                9,10 => "Sobresaliente"
        ];

        foreach (NOTAS as $key => $value) {
            if ($key == $nota){
                 echo "la nota es ", $value;
            }
        }
    ?>
</body>
</html>