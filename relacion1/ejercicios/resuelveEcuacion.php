<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/relacion1/playamar.png" type="image/x-icon">
    <title>Ecuacion de segundo grado</title>
</head>

<body>
    <h1>Ecuacion de segundo grado</h1>

    <?php
    $valorA = 4.0;
    $valorB = 8.0;
    $valorC = 0.0;

    if ($valorA == 0 && $valorB == 0) {
        echo "No es una ecuacion.";
    } else if ($valorA == 0) {
        #Hacer otra solucion
        $calculo = - ($valorC) / $valorB;
        echo "Solo tiene una raiz: ", round($calculo, 2);
    } else if ($valorB == 0) {
        //Si no existe b se debe despejar los varoles por ende
        $calculo = - ($valorC) / $valorA;
        #vemos qu ese hace en cada uno
        if ($calculo <= 0) {
            echo "Las raices no son reales.";
        } else {
            $raiz = sqrt($calculo);
            echo "La primera raiz es: 0<br/>";
            echo "La segunda raiz es: ", round($raiz, 2);
        }
    } else if ($valorC == 0) {
        $calculo = - $valorB / $valorA;
        echo "Tiene 2 raices:
                Raiz = 0 <br/>
                Raiz2 =", round($calculo, 2);
    } else {
        //Potencia pow($valorB, 2) o $valorB ** 2
        $discriminante = pow($valorB, 2) - 4 * $valorA * $valorC;
        if ($discriminante < 0) {
            echo "Las raices no son reales.";
        } else {
            $raiz = sqrt($discriminante);
            $solucion1 = (-$valorB - $raiz) / (2 * $valorA);
            $solucion2 = ($valorB - $raiz) / (2 * $valorA);
            echo "Tiene dos raices:<br/> Primera: ", round($solucion1, 2), "<br/> Segunda:", round($solucion2, 2);
        }
    }

    ?>
</body>

</html>