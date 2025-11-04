<?php
// ejercicio8_disyuncion.php
// Con radios
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $texto = $_POST['texto'] ?? '';
  $mode = $_POST['mode'] ?? '';
  if ($mode === 'upper') $result = htmlspecialchars(strtoupper($texto));
  elseif ($mode === 'lower') $result = htmlspecialchars(strtolower($texto));
  else $result = 'No se seleccionó opción válida.';
}
?>
<!doctype html>
<html>

<head>
  <title>Ejercicio 8 - disyunción</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="ejercicio8_disyuncion.js"></script>
</head>

<body class="p-3">
  <div class="container">
    <h1>Ejercicio 8 - mostrar mayúsculas <em>o</em> minúsculas (disyunción)</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="form8d">
      <div class="mb-3">
        <label for="texto" class="form-label">Texto</label>
        <input type="text" name="texto" id="texto" class="form-control" required>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="mode" id="upper" value="upper">
        <label class="form-check-label" for="upper">Mayúsculas</label>
      </div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="radio" name="mode" id="lower" value="lower">
        <label class="form-check-label" for="lower">Minúsculas</label>
      </div>
      <button class="btn btn-primary" type="submit">Enviar</button>
    </form>

    <hr>
    <h3>Resultado</h3>
    <div><?php echo $result ? $result : '<p>Sin resultado</p>'; ?></div>
  </div>
</body>

</html>