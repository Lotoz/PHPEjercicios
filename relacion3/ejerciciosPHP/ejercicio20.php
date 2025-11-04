<?php
// ejercicio20.php - seguridad y sanitización moderna
$mensaje = '';
$sorted = null;

// Ejemplo de uso seguro de htmlspecialchars para el atributo action
$action_example = htmlspecialchars('ejercicio12.php', ENT_QUOTES, 'UTF-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Sanitizar entrada básica
    $raw = $_POST['names'] ?? '';

    // Reemplazo moderno de FILTER_SANITIZE_STRING:
    // eliminamos etiquetas HTML y luego escapamos caracteres especiales
    $san = strip_tags($raw);
    $san = htmlspecialchars($san, ENT_QUOTES, 'UTF-8');

    // 2. Separar y limpiar cada nombre
    $parts = array_map('trim', explode(',', $san));

    // 3. Validar que cada nombre solo contenga letras, espacios, acentos y guiones
    $valid = true;
    foreach ($parts as $p) {
        if ($p === '') continue;
        if (!preg_match('/^[\p{L}\s\-]+$/u', $p)) {
            $valid = false;
            break;
        }
    }

    if (!$valid) {
        $mensaje = 'Entrada contiene caracteres no permitidos.';
    } else {
        // 4. Ordenar con un algoritmo burbuja simple
        function bubble_sort_local(array &$arr): void {
            $n = count($arr);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if (strcasecmp($arr[$j], $arr[$j + 1]) > 0) {
                        [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
                    }
                }
            }
        }

        $toSort = array_filter($parts); // eliminar vacíos
        bubble_sort_local($toSort);
        $sorted = $toSort;
    }
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Ejercicio 20 - Seguridad y sanitización moderna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h1 class="mb-3">Ejercicio 20 - Seguridad y Sanitización (actualizado)</h1>

    <p>Ejemplo de <code>action</code> seguro: 
        <strong><?php echo $action_example; ?></strong>
    </p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>" class="mb-3">
        <label class="form-label">Lista de nombres (separados por comas):</label>
        <input type="text" name="names" class="form-control w-50 d-inline-block" required>
        <button type="submit" class="btn btn-primary ms-2">Enviar</button>
    </form>

    <?php if ($mensaje): ?>
        <div class="alert alert-danger"><?php echo $mensaje; ?></div>
    <?php endif; ?>

    <?php if ($sorted): ?>
        <div class="alert alert-success">
            <strong>Ordenado:</strong> <?php echo implode(', ', $sorted); ?>
        </div>
    <?php endif; ?>

    <script src="ejercicio20.js"></script>
</body>
</html>
