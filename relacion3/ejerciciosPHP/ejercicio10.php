<?php
// ejercicio10.php - muestra palabras en orden inverso
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $texto = trim($_POST['texto'] ?? '');
  if ($texto === '') $result = 'Texto vacío.';
  else {
    $words = preg_split('/\s+/', $texto);
    $words = array_reverse($words);
    $result = htmlspecialchars(implode(' ', $words));
  }
}
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 10</title>
</head>

<body>
  <h1>Ejercicio 10 - palabras en orden inverso</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="text" name="texto" required style="width:60%">
    <button type="submit">Enviar</button>
  </form>
  <div><?php echo $result ?: '<em>Sin resultado</em>'; ?></div>
  <script src="ejercicio10.js"></script>
</body>

</html>