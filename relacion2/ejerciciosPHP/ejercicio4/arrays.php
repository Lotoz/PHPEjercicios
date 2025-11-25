<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/relacion1/playamar.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Array</title>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="text-primary mb-4">Manejo Básico de Arrays</h1>

                <?php
                const SEMANA = ["lunes", "martes", "miéroles", "jueves", "viernes", "sábado", "domingo"];

                echo "<p><strong>El primer día de la semana es:</strong> " . SEMANA[0] . "</p>";
                echo "<p><strong>Una semana tiene " . count(SEMANA) . " días.</strong></p>";
                echo "<p><strong>Todos los días de la semana son:</strong></p>";

                echo "<ol class='list-group list-group-numbered'>";
                for ($i = 0; $i < sizeof(SEMANA); $i++) {
                    echo "<li class='list-group-item'>" . SEMANA[$i] . "</li>";
                }
                echo "</ol>";
                ?>

            </div>
        </div>
    </div>
</body>

</html>