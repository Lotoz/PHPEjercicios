<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCD</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="$_GET">
        <h3>MCD</h3>
        <div>
            <label class="form-label" for="number1">Introduce numero 1:</label>
            <input class="rounded" type="number" id="number1" name="number1" placeholder="ingresa un numero">
        </div>
        <div>
            <label class="form-label" for="number2">Introduce numero 2:</label>
            <input class="rounded" type="number" id="number2" name="number2" placeholder="ingresa un numero">
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
        <?php

        //Hacer ejercicios recursivos para practicar
    if (!empty($_GET)) {
        include 'relacion3.php';
         $num = $_GET['number1'];
         $num2 = $_GET['number2'];

        echo "El MCM es ".MCD($num,$num2)."<br/>";
        echo "La division de euclides ".euclides($num,$num2);
    }
        ?>
    </form>
</body>
</html>