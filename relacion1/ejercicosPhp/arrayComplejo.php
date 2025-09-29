<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <title>Array Asociativo</title>
</head>

<body>

    <h1>Array Asociativo</h1>

    <?php
    //Se pone un clave y un valor
    const DIA_TEMP = [
        "lunes" => 27,
        "martes" => 30,
        "miércoles" => 15,
        "jueves" => 23,
        "viernes" => 18,
        "sábado" => 24,
        "domingo" => 8
    ];

    // la temperatura del primer dia de la semana
    echo "Temperatura día lunes: ", DIA_TEMP["lunes"], "ºC <br><br>";

    // la temperatura de todos los días, secuencialmente
    foreach (DIA_TEMP as $k => $v) {
        echo "$k: $v ºC <br>";
    }

    // lo mismo que el anterior, pero en formato de lista numerada
    echo "<ol>";

    foreach (DIA_TEMP as $k => $v) {
        echo "<li>$k: $v ºC</li>";
    };

    echo "</ol>";

    //OTRA FORMA DE DECLARARLO
    $arrayName = array(); //Tambien para declarar array, es a gusto

    //Tablaaa
    echo "<table class='tablaEstetica' >";
    echo "<tr><th>DIA</th><th>TEMP</th></tr>";
    foreach (DIA_TEMP as $k => $v) {
        echo "<tr><td>", $k, "</td> <td>", $v, "</td></tr>";;
    }
    echo "</table> <br/>";

    ## CON CONTADOR
    $contador = 1;
    echo "<table class='tablaEstetica'>";
    echo "<tr><th/><th>DIA</th><th>TEMP</th></tr>";
    foreach (DIA_TEMP as $k => $v) {
        echo "<tr><td>", $contador, "</td><td>", $k, "</td> <td>", $v, "</td></tr>";
        $contador++;
    }
    echo "</table>";
    ?>

</body>

</html>