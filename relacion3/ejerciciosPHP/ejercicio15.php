<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 15</title>
</head>

<body>
  <h1>Ejercicio 15 - Arrow functions y switch vs match</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>Radio: <input type="number" step="any" name="r" required></label>
    <button type="submit">Enviar</button>
  </form>
  <?php
  // ejercicio15.php - arrow functions and switch vs match demo
  $explanation = '';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $r = floatval($_POST['r'] ?? 0);
    if ($r <= 0) $explanation = '<div class="alert alert-danger">Radio debe ser positivo.</div>';
    else {
      $circ = fn($n) => 2 * M_PI * $n;
      $area = fn($n) => M_PI * $n * $n;
      $vol = fn($r) => (4 / 3) * M_PI * $r ** 3;
      $explanation = '<ul>';
      $explanation .= '<li>Longitud: ' . round($circ($r), 6) . '</li>';
      $explanation .= '<li>Área: ' . round($area($r), 6) . '</li>';
      $explanation .= '<li>Volumen: ' . round($vol($r), 6) . '</li>';
      $explanation .= '</ul>';
    }
  }
  $note = "<p>switch es una estructura clásica que permite 'caer' entre casos si no se usa break; match (PHP 8.0) devuelve un valor, no permite caídas y es más seguro para comparaciones estrictas.</p>";
  ?>
  <div><?php echo $explanation; ?></div>
  <hr>
  <div><?php echo $note; ?></div>
</body>

</html>