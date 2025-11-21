<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="$_GET">
        <h3>Dado trucado</h3>
        <div>
            <label class="form-label" for="number1">Introduce tiradas:</label>
            <input class="rounded" type="number" id="number1" name="number1" placeholder="ingresa un numero del uno al 100">
        </div>
        <?php
        if (!empty($_GET)) {
            $num = $_GET['number1'];
            //Array de frecuencias
           
            function cuentaFrecuencias($numero, $array){
                return $array =+ $array[$numero]++; 
            }
            //Funcion  de array
            //$frecuencias = array_fill(1,6,0);
            /**
             * Lo recorremos con un for each
             * foreach ($frecuencias as $tiradaNum => $f){
             *      echo "El numero $tiradaNum : $f<br>";
             * }
             */
            //SE puede mostrar con vamp dump, pero lo correcto seria con un for.
            //Hacerlo 
            function dadoProbable($repite){
                $devolucion = "";
                for($i = 0; $i < $repite ; $i++){
                    $tirada = rand(1,6);
                    $devolucion .= " " . $tirada;
                }
                return $devolucion;
            }
            //Falta contar las frecuencias con las que salen esos dados
            function dadoTrucado($repite) {
                //No se debera acondicionar asi , luego revisar
                //El dado trucado se asocia que cada vez que salga uno mas elevado se agregue

                $devolucion = "";
                for($i = 0; $i < $repite ; $i++){
                    $tirada = rand(1,9);
                    if ($tirada < 6) {
                        $devolucion .= " " . $tirada;
                    }else{
                        $tirada = 6;
                        $devolucion .= " " . $tirada;
                    }
                }
                return $devolucion;
            }
            echo "Dado no trucado: ".dadoProbable($num)."<br/>";
            echo "Dado trucado: ".dadoTrucado($num);
            
        }
        ?>
    </form>
</body>
</html>