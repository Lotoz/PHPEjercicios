
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 17</title>
</head>

<body>
    <h1>Ejercicio 17 - funciones varias de array</h1>
    <p>Pares: <?php echo implode(', ', $impares); ?></p>
    <p>Múltiplos de 3: <?php echo implode(', ', $multTres); ?></p>
    <p>Cantidad de impares: <?php echo $count_pares; ?></p>
    <p>Alguno múltiplo de 5? <?php echo $any_mult5 ? 'Sí' : 'No'; ?></p>
    <p>Primos: <?php echo implode(', ', $primos); ?></p>
    <p>Primera doble cifra idéntica: <?php echo $first_double_same ?? 'No hay'; ?></p>
    <p>Cuadrados (primeros 10): <?php echo implode(', ', array_slice($squares, 0, 10)); ?></p>
    <p>Doblados (primeros 10): <?php echo implode(', ', array_slice($walk, 0, 10)); ?></p>
    <p>Intersección: <?php echo implode(', ', $intersect) ?: 'Ninguno'; ?></p>
    <?php
// ejercicio17.php - usar muchas funciones de array Verificar ejercicio
$impares = range(1, 20, 2); // 1,3,5,...,19
$multTres = range(3, 39, 3); // 3,6,...,39
$count_pares = count($impares); 
$any_mult5 = array_any($impares, fn($v) => $v % 5 === 0);
function esPrimo($n)
{
    if ($n < 2) return false;
    for ($i = 2; $i * $i <= $n; $i++) 
        if ($n % $i === 0) return false;
        return true;
}
$primos = array_filter($impares, fn($v) => esPrimo($v));
$first_double_same = array_find($impares, fn($v) => $v >= 10 && $v < 100 && intval($v / 10) === ($v % 10));
$squares = array_map(fn($v) => $v * $v,$impares);
$walk = $impares;
array_walk($walk, function (&$v) {
    $v *= 2;
});
//No es con intersect
$intersect = array_intersect($impares, $multTres);
?>

</body>

</html>