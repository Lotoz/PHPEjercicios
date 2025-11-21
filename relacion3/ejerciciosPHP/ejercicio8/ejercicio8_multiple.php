<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Ejercicio 8 - Mayúsculas y Minúsculas</title>
  <script defer src="ejercicio8_multiple.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 2em;
    }

    .error {
      color: red;
    }

    #resultado {
      margin-top: 1em;
      padding: 10px;
      border-radius: 5px;
      background: #f4f4f4;
    }
  </style>
</head>

<body>
  <h2>Mostrar texto en mayúsculas y/o minúsculas</h2>
  <form id="textoForm" method="post"
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="texto">Introduce un texto:</label><br>
    <input type="text" name="texto" id="texto" required><br><br>

    <label><input type="checkbox" name="upper" id="upper"> Mayúsculas</label>
    <label><input type="checkbox" name="lower" id="lower"> Minúsculas</label><br><br>

    <button type="submit">Mostrar</button>
    <p id="mensajeError" class="error"></p>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $texto = $_POST['texto'] ?? '';
    $upper = isset($_POST['upper']);
    $lower = isset($_POST['lower']);
    $parts = [];
    if ($upper) $parts[] = strtoupper($texto);
    if ($lower) $parts[] = strtolower($texto);
    if (empty($parts)) {
      echo "<div id='resultado' class='error'>No se seleccionó ninguna opción.</div>";
    } else {
      $safeParts = array_map('htmlspecialchars', $parts);
      echo "<div id='resultado'>" . implode('<br>', $safeParts) . "</div>";
    }
  }
  ?>
</body>

</html>