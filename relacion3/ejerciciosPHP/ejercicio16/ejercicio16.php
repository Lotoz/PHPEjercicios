<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 16</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-3">
  <?php
  /**
   * Devuelve true si todos los elementos cumplen la condición.
   * callback recibe ($value, $key)
   */
  function array_all(array $array, callable $callback): bool
  {
    foreach ($array as $k => $v) {
      if (!$callback($v, $k)) {
        return false;
      }
    }
    return true;
  }

  /**
   * Devuelve true si algún elemento cumple la condición.
   * callback recibe ($value, $key)
   */
  function array_any(array $array, callable $callback): bool
  {
    foreach ($array as $k => $v) {
      if ($callback($v, $k)) {
        return true;
      }
    }
    return false;
  }

  /**
   * Devuelve el primer valor que cumple la condición, o null si ninguno.
   * callback recibe ($value, $key)
   */
  function array_find(array $array, callable $callback)
  {
    foreach ($array as $k => $v) {
      if ($callback($v, $k)) {
        return $v;
      }
    }
    return null;
  }

  $numbers = range(1, 100);

  // comprobar todos positivos / alguno múltiplo de 5
  $all_positive = array_all($numbers, fn($v) => $v > 0);
  $any_mult5 = array_any($numbers, fn($v) => $v % 5 === 0);

  // función primo
  function is_prime($n)
  {
    if ($n < 2) return false;
    for ($i = 2; $i * $i <= $n; $i++) {
      if ($n % $i === 0) return false;
    }
    return true;
  }

  // filtrar primos (reindexamos por claridad)
  $primes = array_values(array_filter($numbers, fn($v) => is_prime($v)));

  // primera ocurrencia doble cifra con cifras iguales (ej: 11, 22, ...)
  $first_double_digit_same = array_find($numbers, fn($v) => $v >= 10 && $v < 100 && intdiv($v, 10) === ($v % 10));

  // cuadrados
  $squares = array_map(fn($v) => $v * $v, $numbers);

  // array_walk para doblar valores (hacemos copia)
  $walked = $numbers;
  array_walk($walked, function (&$v) {
    $v = $v * 2;
  });
  ?>
  <h1>Ejercicio 16 - funciones array con callbacks</h1>
  <div class="container">
    <div class="alert alert-primary"><strong>Todos positivos?</strong> <?php echo $all_positive ? 'Sí' : 'No'; ?></div>
    <div class="alert alert-secondary"><strong>Alguno múltiplo de 5?</strong> <?php echo $any_mult5 ? 'Sí' : 'No'; ?></div>
    <div class="alert alert-success"><strong>Primos (filtrados)</strong> <?php echo implode(', ', array_slice($primes, 0, 20)) . (count($primes) > 20 ? ', ...' : ''); ?></div>
    <div class="alert alert-warning"><strong>Primera ocurrencia doble cifra idéntica</strong> <?php echo $first_double_digit_same ?? 'No hay'; ?></div>
    <div class="alert alert-info"><strong>Cuadrados (primeros 10)</strong> <?php echo implode(', ', array_slice($squares, 0, 10)); ?></div>
    <div class="alert alert-dark"><strong>Doblados mediante array_walk (primeros 10)</strong> <?php echo implode(', ', array_slice($walked, 0, 10)); ?></div>
  </div>
</body>

</html>