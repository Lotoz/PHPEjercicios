<?php
// ejercicio11.php - uso de swap y reverse_array_with_swap
require_once 'functionsRel3.php';
$initial = [1, 2, 3, 4, 5];
$swapped = $initial;
swap($swapped[0], $swapped[4]); // ejemplo de swap
$reversed = $initial;
reverse_array_with_swap($reversed);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 11</title>
</head>

<body>
    <h1>Ejercicio 11 - swap y reverse</h1>
    <p>Inicial: <?php echo implode(', ', $initial); ?></p>
    <p>Después swap(0,4): <?php echo implode(', ', $swapped); ?></p>
    <p>Reverse mediante swap: <?php echo implode(', ', $reversed); ?></p>
    <script src="ejercicio11.js"></script>
</body>

</html>