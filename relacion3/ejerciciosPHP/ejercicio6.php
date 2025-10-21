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
            <input class="rounded" type="number" id="number1" name="number1" placeholder="ingresa un numero">
        </div>
        <?php
        if (!empty($_GET)) {
            $num = $_GET['number1'];

            function dadoProbable($repite){
                $devolucion = "";
                for($i = 0; $i < $repite ; $i++){
                    $tirada = rand(1,6);
                    $devolucion .= " " . $tirada;
                }
                return $devolucion;
            }

            function dadoTrucado($repite) {
                //No se debera acondicionar asi , luego revisar
                $devolucion = "";
                for($i = 0; $i < $repite ; $i++){
                    $tirada = rand(3,6);
                    $devolucion .= " " . $tirada;
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