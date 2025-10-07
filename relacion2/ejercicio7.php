<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <title>Formulario</title>
</head>

<body>
<!--Mejorar plantilla de formulario-->
    <div class="d-flex justify-content-center aling-items-center ">
<!--Cuando el calculo esta en el propio archivo, hay que llamarlo desde action(a si mismo)-->
        <form class="p-3 shadow rounded" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <h3>Calculadora</h3>
            <div>
                <label class="form-label" for="number1">Introduce numero 1:</label>
                <input class="rounded" type="number" step="0.01" id="number1" name="number1" placeholder="2 cifras decimales">
            </div>
            <div>
                <label class="form-label" for="number2">Introduce numero 2:</label>
                <input class="rounded"  type="number" step="0.01" id="number2" name="number2" placeholder="2 cifras decimales">
            </div>
            <div class="">
                <label for="operador" class="form-label ">Elige un operador: </label>
                <select name="operador" id="operador" class="form-select round ">
                    <option value="suma" selected>+</option>
                    <option value="resta">-</option>
                    <option value="division">/</option>
                    <option value="multiplicacion">*</option>
                    <option value="resto">%</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Calcular" class="btn-outline-info"/>
            </div>
        </form>
    </div>
    <p>
        <?php
            
            echo "algo";

        ?>
    </p>
</body>

</html>