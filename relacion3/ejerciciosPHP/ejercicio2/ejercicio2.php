<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial con recursividad</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="$_GET">
        <h3>Factorial</h3>
        <div>
            <label class="form-label" for="number1">Introduce numero 1:</label>
            <input class="rounded" type="number" id="number1" name="number1" placeholder="ingresa un numero">
        </div>
        <?php
        include 'relacion3.php';
        if (!empty($_GET)) {
            $num = $_GET['number1'];
            $factorial = factorial($num);
            echo "El factorial de " . $num . " es " . $factorial;
        }
        ?>
    </form>
</body>

</html>