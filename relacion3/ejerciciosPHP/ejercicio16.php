<?php
// ejercicio16.php - usar funciones array_* con callbacks
$numbers = range(1, 100);
$all_positive = array_all($numbers, fn($v, $k) => $v > 0);
$any_mult5 = array_any($numbers, fn($v, $k) => $v % 5 === 0);
function is_prime($n)
{
  if ($n < 2) return false;
  for ($i = 2; $i * i <= $n; $i++) if ($n % $i === 0) return false;
  return true;
}
$primes = array_filter($numbers, fn($v, $k) => is_prime($v));
$first_double_digit_same = array_find($numbers, fn($v, $k) => $v >= 10 && $v < 100 && intval($v / 10) === ($v % 10));
$squares = array_map($numbers, fn($v, $k) => $v * $v); // PHP 8.4 array_map signature supports named params this way
// array_walk to double values (we'll copy and modify)
$walked = $numbers;
array_walk($walked, function (&$v, $k) {
  $v = $v * 2;
});
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 16</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-3">
  <h1>Ejercicio 16 - funciones array con callbacks</h1>
  <div class="container">
    <div class="alert alert-primary"><strong>Todos positivos?</strong> <?php echo $all_positive ? 'Sí' : 'No'; ?></div>
    <div class="alert alert-secondary"><strong>Alguno múltiplo de 5?</strong> <?php echo $any_mult5 ? 'Sí' : 'No'; ?></div>
    <div class="alert alert-success"><strong>Primos (filtrados)</strong> <?php echo implode(', ', array_slice($primes, 0, 20)) . (count($primes) > 20 ? ', ...' : ''); ?></div>
    <div class="alert alert-warning"><strong>Primera ocurrencia doble cifra idéntica</strong> <?php echo $first_double_digit_same ?? 'No hay'; ?></div>
    <div class="alert alert-info"><strong>Cuadrados (primeros 10)</strong> <?php echo implode(', ', array_slice($squares, 0, 10)); ?></div>
    <div class="alert alert-dark"><strong>Doblados mediante array_walk (primeros 10)</strong> <?php echo implode(', ', array_slice($walked, 0, 10)); ?></div>
  </div>
  <script src="ejercicio16.js"></script>
</body>

</html>