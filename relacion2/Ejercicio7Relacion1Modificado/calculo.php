<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/relacion1/playamar.png" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

    <title>Calcula notas</title>
</head>

<body>
    <table class="table table-striped table-hover">
        <thead class="table-success">
            <th>Alumno</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Faltas</th>
            <th>Correo</th>
            <th>Estado</th>
        </thead>
        <tbody class="table-group-divider">
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
        $nombre = $_POST['nombre'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $faltas = $_POST['faltas'];
        $correo= $_POST['correo'];
        echo "<tr>
                    <td> $nombre </td>
                    <td>", $nota1, "</td>",
        "<td>", $nota2, "</td>",
        "<td>", $faltas, "</td>",
        "<td>", $correo, "</td>";

        /*function validacionNotas($n1)
        {
            $notaValidada = ($n1 >= 1 and $n1 <= 10) ?  $n1 : "Nota no valida";
            return $notaValidada;
        }
        function validaFaltas($f)
        {
            $faltaValidada = ($f < 0) ? "No son faltas validas" : $f;
            return $faltaValidada;
        }
        function calculaMedia($nota1, $nota2, $faltas)
        {
            $media = ($nota1 + $nota2) / 2 - 0.25 * $faltas;
            return $media;
        }
        if (validacionNotas($nota1) and validacionNotas($nota2) and validaFaltas($faltas)) {
            $media = calculaMedia($nota1, $nota2, $faltas);

            if ($media > 5) {
                echo "<td>Aprobado <b>'$media'</b></td>";
            } else {
                echo "<td> Desaprobado</td>";
            }
        }*/
        function calculaMedia($nota1, $nota2, $faltas)
        {
            $media = ($nota1 + $nota2) / 2 - 0.25 * $faltas;
            return $media;
        }    
        $media = calculaMedia($nota1, $nota2, $faltas);

            if ($media >= 5) {
                echo "<td>Aprobado <b>'$media'</b></td>";
            } else {
                echo "<td> Desaprobado</td>";
            }
        ?>
        </tbody>
    </table>

</body>

</html>