<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina numero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <?php
    //* Al usar el metodo get vemos el numeor aleatorio, pero es mas divertido cuando usamos post porque este no se ve

    // Detectamos si el evento estaba antes declarado
    $aleatorio = isset($_GET['aleatorio']) ? (int)$_GET['aleatorio'] : null;

    // si no estaba declarado, valdra null, por ende le damos el valor
    if ($aleatorio === null) {
        $aleatorio = rand(1, 100);
    }

    // Inicio de las variables para mensajes de ayuda e inicio
    $mensaje = "Introduce un número para comenzar...";
    $color = "alert-info";

    if (isset($_GET['numUser']) && $_GET['numUser'] !== "") {
        $numUser = (int)$_GET['numUser'];

        if ($numUser == $aleatorio) {
            $mensaje = "Has acertado. El número era $aleatorio. Recarga la página para jugar de nuevo.";
            $color = "alert-success";
        } elseif ($numUser > $aleatorio) {
            $mensaje = "Te has pasado.";
            $color = "alert-danger";
        } else {
            $mensaje = "Te has quedado corto.";
            $color = "alert-warning";
        }
    }
    ?>

    <div class="container w-50">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get" class="mb-3">
            <label for="numUser" class="form-label">Ingresa un número:</label>
            <input type="number" name="numUser" id="numUser" class="form-control" autofocus>

            <!-- Número secreto persistente -->
            <input type="hidden" name="aleatorio" value="<?= $aleatorio ?>">

            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </form>

        <div class="alert <?= $color ?>" role="alert">
            <?= $mensaje ?>
        </div>
    </div>

</body>

</html>