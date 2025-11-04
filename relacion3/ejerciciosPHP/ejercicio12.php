<?php
// ejercicio12.php - bubble sort (ascenso de burbujas) por referencia
function bubble_sort(array &$arr): void
{
    $n = count($arr);
    if ($n <= 1) return;
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if (strcasecmp($arr[$j], $arr[$j + 1]) > 0) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
            }
        }
    }
}
$datos = ['Pérez', 'García', 'López', 'Márquez', 'Álvarez', 'Domínguez', 'Ruíz', 'Díaz'];
$antes = $datos;
bubble_sort($datos);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 12</title>
</head>

<body>
    <h1>Ejercicio 12 - ascenso de burbujas</h1>
    <p>Antes: <?php echo implode(', ', $antes); ?></p>
    <p>Después: <?php echo implode(', ', $datos); ?></p>
    <script src="ejercicio12.js"></script>
</body>

</html>