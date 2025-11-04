<?php
// ejercicio14.php - funciones anónimas para circunferencia, área y volumen
$result_html = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $r = floatval($_POST['r'] ?? 0);
  if ($r <= 0) $result_html = '<div class="alert alert-danger">Introduce un radio positivo.</div>';
  else {
    $circunferencia = function ($n) {
      return 2 * M_PI * $n;
    };
    $circulo = function ($n) {
      return M_PI * $n * $n;
    };
    $esfera = function ($r) {
      return (4 / 3) * M_PI * $r * $r * $r;
    };
    $result_html = '<ul>';
    $result_html .= '<li>Longitud (circunferencia): ' . round($circunferencia($r), 6) . '</li>';
    $result_html .= '<li>Área (círculo): ' . round($circulo($r), 6) . '</li>';
    $result_html .= '<li>Volumen (esfera): ' . round($esfera($r), 6) . '</li>';
    $result_html .= '</ul>';
  }
}
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 14</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-3">
  <div class="container">
    <h1>Ejercicio 14 - funciones anónimas</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="form14">
      <div class="mb-3">
        <label for="r" class="form-label">Radio</label>
        <input type="number" step="any" name="r" id="r" class="form-control" required>
      </div>
      <button class="btn btn-primary" type="submit">Calcular</button>
    </form>
    <hr>
    <?php echo $result_html; ?>
  </div>
  <script src="ejercicio14.js"></script>
</body>

</html>