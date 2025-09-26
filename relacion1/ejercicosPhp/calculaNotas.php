<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>Calcula notas</title>
</head>
<body>
    <table class="tablaEstetica">
        <tr>
            <th>Alumno</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Faltas</th>
            <th>Estado</th>
        </tr>
        <?php
            ## TABLA DE ALUMNOS
            #Prueba de array de multiples dimensiones
            /*
            const ALUMNOS = [
                        1=>[5,4,6,8],
                        2=>[6,8,9,2],
                        3=>[2,3,4,10]
            ];
            foreach (ALUMNOS as $alumno => $notas) {
                foreach ($alumno as $notas => $nota) {
                    
                }
            }*/

            $nota1 = 8;
            $nota2 = 7;
            $faltas= 4;
            echo "<tr>
                    <td>Jorge</td>
                    <td>",$nota1,"</td>",
                    "<td>",$nota2,"</td>",
                    "<td>",$faltas,"</td>";

            $media = ($nota1 + $nota2) / 2 - 0.25 * $faltas;

            if ($media > 5) { 
                echo "<td>Aprobado <b>'$media'</b></td>";
            } else {
                echo "<td> Desaprobado</td>";
            }
        ?>
    </table>
   
</body>
</html>