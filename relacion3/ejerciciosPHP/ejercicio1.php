<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="$_GET">
        <h3>Calculadora</h3>
        <div>
            <label class="form-label" for="number1">Introduce numero 1:</label>
            <input class="rounded" type="number" id="number1" name="number1" placeholder="ingresa un numero">
        </div>
        <?php
        if (!empty($_GET)) {
            include 'relacion3.php';
            //Revisar porque tiene little fallos
            $num = $_GET['number1'];
            for($j = 1; $j <= $num ; $j++){
                if (isPrimo($j)) {
                    echo "<span class='pe-3' >". $j ." </span>";
                }
            }
        }
        ?>
    </form>
</body>

</html>