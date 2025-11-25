<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Calculadora</title>
</head>

<body>
    <!--El metodo get manda los datos en la misma request, el metodo post es mas privado
    se mandan los datos pero no son visibles. Siempre se usa post, a no ser que sea imposible no usarlo.-->
<!--mejorar la estetica de esta calculadora, haciendola guapa e intentar programarla-->
    <h2 class="text-primary center py-3 px5">Calculadora basica con 2 numeros y un operador</h2>
    <div class="py5 px5">
        <form action="" method="get" class="border border-primary w-50 row g-3 bg-warning">
            <div class="mb-3 col-md-6">
                <label for="number1" class="form-label">Introduce numero 1:</label>
                <input type="number"  class="form-control" id="number1" name="number1">
            </div>
            <div class="mb-3 col-md-6">
                <label for="number2" >Introduce numero 2:</label>
                <input type="number" id="number2" name="number2"  class="form-control">
            </div>
            <div class="mb-3 col-auto">
                <label for="operador" class="form-label ">Elige un operador: </label>
                <select name="operador" id="operador" class="form-select ">
                    <option value="suma" selected>+</option>
                    <option value="resta">-</option>
                    <option value="division">/</option>
                    <option value="multiplicacion">*</option>
                    <option value="resto">%</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Calcular" class="col-12 btn btn-outline-info"/>
            </div>
    </div>


    <?php
        

    ?>
    </form>
</body>

</html>