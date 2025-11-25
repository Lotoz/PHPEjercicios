<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/relacion1/playamar.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./style.css">
    <title>Array Asociativo</title>
</head>

<body class="bg-light">

    <div class="container mt-5">

        <h1 class="text-primary mb-4">Array Asociativo</h1>

        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <?php
                const DIA_TEMP = [
                    "lunes" => 27,
                    "martes" => 30,
                    "miércoles" => 15,
                    "jueves" => 23,
                    "viernes" => 18,
                    "sábado" => 24,
                    "domingo" => 8
                ];

                echo "<p><strong>Temperatura del lunes:</strong> " . DIA_TEMP["lunes"] . "ºC</p>";

                echo "<h5>Listado secuencial</h5>";
                echo "<ul class='list-group mb-3'>";
                foreach (DIA_TEMP as $k => $v) {
                    echo "<li class='list-group-item'>$k: $v ºC</li>";
                }
                echo "</ul>";

                echo "<h5>Lista numerada</h5>";
                echo "<ol class='list-group list-group-numbered mb-4'>";
                foreach (DIA_TEMP as $k => $v) {
                    echo "<li class='list-group-item'>$k: $v ºC</li>";
                }
                echo "</ol>";

                echo "<h5>Tabla simple</h5>";
                echo "<table class='table table-striped table-bordered mt-3'>";
                echo "<tr class='table-dark'><th>Día</th><th>Temp</th></tr>";
                foreach (DIA_TEMP as $k => $v) {
                    echo "<tr><td>$k</td><td>$v ºC</td></tr>";
                }
                echo "</table>";

                echo "<h5>Tabla con contador</h5>";
                $contador = 1;
                echo "<table class='table table-hover table-bordered mt-3'>";
                echo "<tr class='table-dark'><th>#</th><th>Día</th><th>Temp</th></tr>";
                foreach (DIA_TEMP as $k => $v) {
                    echo "<tr><td>$contador</td><td>$k</td><td>$v ºC</td></tr>";
                    $contador++;
                }
                echo "</table>";
                ?>
            </div>
        </div>

        <!-- Spinner de prueba -->
        <div class="mb-4">
            <h4>Spinner de prueba</h4>
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Cargando...</span>
            </div>
        </div>

        <!-- Botón de prueba -->
        <div class="mb-4">
            <h4>Botón de prueba</h4>
            <button class="btn btn-success">Presionar</button>
        </div>

    </div>

    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>