<?php
// ejercicio18.php - generador de n menús
$menu = [
  'entrante' => ['Ensalada César', 'Hummus', 'Boquerones al natural'],
  'primero' => ['Gazpachuelo', 'Salmorejo', 'Ajo Blanco'],
  'segundo' => ['Fritura Malagueña', 'Conejo al ajillo', 'Pisto con huevo'],
  'postre' => ['Helado 3 sabores', 'Flan', 'Tarta de Queso']
];

$n = intval($_GET['n'] ?? 3);
$menus = [];
for ($i = 0; $i < $n; $i++) {
  $m = [];
  foreach ($menu as $tipo => $opciones) {
    $m[$tipo] = $opciones[array_rand($opciones)];
  }
  $menus[] = $m;
}
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ejercicio 18</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-3">
  <h1>Ejercicio 18 - generador de menús</h1>
  <div class="row">
    <?php foreach ($menus as $idx => $m): ?>
      <div class="col-md-4">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Menú <?php echo $idx + 1; ?></h5>
            <ul>
              <?php foreach ($m as $tipo => $plato): ?>
                <li><strong><?php echo ucfirst($tipo); ?>:</strong> <?php echo htmlspecialchars($plato); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <script src="ejercicio18.js"></script>
</body>

</html>