<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>Calculo Notas</title>
</head>
<body>
    <h1>Calculo de notas</h1>
        <?php
         ##Creo los dos array
           $rubrica = [
                    "inicial" => 0.20,
                    "primera" => 0.30,
                    "segunda" => 0.20,
                    "tercera" => 0.30
           ];
          $alumno = [
                "inicial" => 9,
                "primera" => 5,
                "segunda" => 7,
                "tercera" => 6
          ];
          $notaFinal = 0; //Es elemento neutro de la suma
          foreach ($rubrica as $prueba => $valor) { 
             $notaFinal += $valor * $alumno[$prueba]; #Estoy recoriendo los dos debido a que comparten clave
            }
            if ($notaFinal > 5) {
                echo "<h1>aprobado</h1> ", $notaFinal;
            } else {
                echo "<h1>notAprobado</h1>";
            }
          
        ?>
    
</body>
</html>