<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>

<body>
    <h1>Ejercicio 17</h1>
    <?php
    //!Mostrar array en <ul>
    function mostrarArrayLista($array)
    {
        echo "<ul>";
        foreach ($array as $key => $value) {
            echo "<li>$key => $value</li>";
        }
        echo "</ul>";
    }

    //!Reindexar array (evitar claves saltadas)
    function acomodaKeys($array)
    {
        $acomodado = [];
        foreach ($array as $value) {
            $acomodado[] = $value;
        }
        return $acomodado;
    }

    //!array_any: ¿Algún elemento cumple?
    function array_any(array $array, callable $callback): bool
    {
        foreach ($array as $k => $v) {
            if ($callback($v, $k)) return true;
        }
        return false;
    }

    //! array_find: primer valor que cumple
    function array_find(array $array, callable $callback)
    {
        foreach ($array as $k => $v) {
            if ($callback($v, $k)) return $v;
        }
        return null;
    }

    //!Primo
    function esPrimo($n)
    {
        if ($n < 2) return false;
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i === 0) return false;
        }
        return true;
    }

    //! Generacion de arrays
    $impares = range(1, 20, 2);         // 1,3,5,...19
    $array2  = range(1, 40, 1);         // 1..40


    // Múltiplos de 3
    $filtrado = array_filter($array2, fn($n) => $n % 3 === 0);
    $multiplosDeTres = acomodaKeys($filtrado);

    // Unión de impares + múltiplos de 3
    $union = array_merge($impares, $multiplosDeTres);

    // Contar repeticiones
    $repetidos = array_count_values($union);

    // Contar impares
    $count_impares = count($impares);

    // ¿Algún múltiplo de 5?
    $any_mult5 = array_any($union, fn($v) => $v % 5 === 0);

    // Primos dentro de la unión
    $primos = array_filter($union, fn($v) => esPrimo($v));
    $primos = acomodaKeys($primos);

    // Primera cifra doble
    $first_double_same = array_find(
        $union,
        fn($v) => $v >= 10 && $v < 100 && intdiv($v, 10) === ($v % 10)
    );

    // Cuadrados
    $squares = array_map(fn($v) => $v * $v, $union);

    // Doble con array_walk
    $walk = $union;
    array_walk($walk, fn(&$v) => $v *= 2);

    // !Intersección entre impares y múltiplos de tres
    $intersect = array_intersect($impares, $multiplosDeTres);
    //! Acomodo de las keys del nuevo array
    $intersect = acomodaKeys($intersect);

    /* Resultados */
    ?>

    <h2>Arrays generados</h2>
    <p><strong>Impares:</strong> <?= implode(', ', $impares) ?></p>
    <p><strong>Múltiplos de 3:</strong> <?= implode(', ', $multiplosDeTres) ?></p>

    <h2>Resultados del ejercicio</h2>
    <p><strong>Cantidad de impares:</strong> <?= $count_impares ?></p>
    <p><strong>Alguno múltiplo de 5:</strong> <?= $any_mult5 ? 'Sí' : 'No' ?></p>
    <p><strong>Primos en la unión:</strong> <?= implode(', ', $primos) ?></p>
    <p><strong>Primera doble cifra idéntica:</strong> <?= $first_double_same ?? 'No hay' ?></p>
    <p><strong>Cuadrados (primeros 10):</strong> <?= implode(', ', array_slice($squares, 0, 10)) ?></p>
    <p><strong>Doblados (primeros 10):</strong> <?= implode(', ', array_slice($walk, 0, 10)) ?></p>

    <h2>Intersección entre impares y múltiplos de 3</h2>
    <p><?= empty($intersect) ? 'Ninguno' : implode(', ', $intersect) ?></p>

    <h2>Repeticiones en la unión</h2>
    <?php mostrarArrayLista($repetidos); ?>

</body>

</html>