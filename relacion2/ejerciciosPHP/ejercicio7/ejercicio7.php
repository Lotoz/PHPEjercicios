<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <title>Formulario</title>
    <style>
        #wrapper {
            
        }
    </style>
</head>

<body>
    <!--Mejorar plantilla de formulario-->
    <div class="d-flex justify-content-center aling-items-center mt-5" id="wrapper">
        <!--Cuando el calculo esta en el propio archivo, hay que llamarlo desde action(a si mismo)-->
        <form class="p-3 shadow rounded" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <h3>Calculadora</h3>
            <div class=mb-3>
                <label class="form-label" for="number1">Introduce numero 1:</label>
                <input class="rounded" type="number" step="0.01" id="number1" name="number1" placeholder="2 cifras decimales">
            </div>
            <div>
                <label class="form-label" for="number2">Introduce numero 2:</label>
                <input class="rounded" type="number" step="0.01" id="number2" name="number2" placeholder="2 cifras decimales">
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
                <input type="submit" value="Calcular" class="btn-outline-info" />
            </div>
            <p id="resultado" class="text-center">
    <!--Aqui sale el resultado tras el envio-->
                <?php
                    //Haremos que se ejecuten los calculos tras el envio
                    if(!empty($_GET)){ //Ya se pulso el boton
                        //Pillamos las 3 variables
                        $numero1 = $_GET['number1'];
                        $numero2 = $_GET['number2'];
                        $operador = $_GET['operador'];
                        function isCero($num1,$num2, $situacion){
                            if ($num2 == 0) {
                                echo "No se puede dividir entre cero";
                            } else {
                               $resultado = ($situacion == 1) ? $num1 / $num2 : $num1 % $num2 ;
                                return $resultado;
                            }
                           
                        }
                        //Mostramos los 3 valores para que se vea el mecanismo de envio
                        $resultado = match ($operador) {
                            "suma" => $numero1 + $numero2,
                            "resta" => $numero1 - $numero2,
                            "division" => isCero($numero1,$numero2, 1),
                            "multiplicacion" => $numero1 * $numero2,
                            "resto" => isCero($numero1,$numero2, "resto")
                        };
                        
                        
                        echo $resultado;

                    }

                ?>
            </p>
        </form>
    </div>

</body>

</html>