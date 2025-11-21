<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina numero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php

    function genaraNumber(&$aleatorio)
    {
        if ($aleatorio == null) {
            $aleatorio = rand(1, 100);
            return $aleatorio;
        }
        return $aleatorio;
    }
    // Se sobreescribe siempre, buscar algun modo de que no se sobreescriba
    $aleatorio = genaraNumber($aleatorio);

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $numUser = $_REQUEST['numUser'];
        if ($numUser == $aleatorio) {
            $mensaje = 'Has ganado! Si quieres jugar de nuevo ingresa otro numero.';
            $color = 'alert-success';
        } else {
            if ($numUser > $aleatorio) {
                $mensaje = 'Te has pasado.';
                $color = 'alert-danger';
            } else {
                $mensaje = 'Te has quedado corto.';
                $color = 'alert-warning';
            }
        }
    }
    ?>
    <div class="container-fluid w-50 m-25">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
            <label for="numUser">Ingresa el numero que pienses que es:</label>
            <input type="number" name="numUser" id="numUser">
            <!--Input secreto donde se genera el numero aleatorio-->
            <input type="hidden" name="aleatorio" value='<?php echo $aleatorio; ?>'>
            <button type="submit" id='enviar'>Enviar</button>
        </form>
        <div class='alert <?php echo $color; ?> ' role=' alert'>
            <p><?php echo $mensaje . "<br>";
                echo $aleatorio; ?></p>

        </div>
    </div>

</body>

</html>