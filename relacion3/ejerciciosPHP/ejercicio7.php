<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de tiempo</title>
</head>
<body>
    <h2>Funciones de tiempo</h2>
    <?php

        #Librerias
        include 'ej7Libreria.php';

        $tiempoUnix = (new DateTime())->getTimestamp();
        echo "Tiempo Unix: ".$tiempoUnix;
        $tiempoEnSegundos = $tiempoUnix/1000;
        echo "<br/>Tiempo Segudos(basado en unix): ".$tiempoEnSegundos;
        $tiempoEnMinutos = $tiempoEnSegundos/60;
        echo "<br/>Tiempo Minutos(basado en unix): ".$tiempoEnMinutos;
        //Tiempo actual
        $tiempoActual = date_default_timezone_set('Europe/Madrid');
        echo "<br/>Tiempo Actual: ".$tiempoActual;
        
       
       //Pillando el dia actual traducido con mis funciones
        $diaActual = getDiaText();
        echo '<br>Dia de hoy: '.$diaActual;
        //Pillando el mes actual traducido con mis funciones
        $mesActual  = getMesText();
        echo '<br/>Mes actual: '.$mesActual;
        //Mostrando las fechas formateadas
        echo '<br>'.fechaStringTo();
        echo '<br>'.fechaToStringC();
    ?>
</body>
</html>