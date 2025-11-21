<?php
// ejercicio9.php - muestra la palabra más larga
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $texto = trim($_POST['texto'] ?? '');
    if ($texto === '') $result = 'Texto vacío.';
    else {
        // split on whitespace, remove punctuation at ends
        $words = preg_split('/\s+/', $texto);
        $longest = '';
        foreach ($words as $w) {
            $wtrim = trim($w, " ,.!?;:\"'()[]{}<>");
            if (mb_strlen($wtrim) > mb_strlen($longest)) $longest = $wtrim;
        }
        $result = 'Palabra más larga: <strong>' . htmlspecialchars($longest) . '</strong>';
    }
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio 9</title>
</head>

<body>
    <h1>Ejercicio 9 - palabra más larga</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="text" name="texto" required style="width:60%">
        <button type="submit">Enviar</button>
    </form>
    <div><?php echo $result ?: '<em>Sin resultado</em>'; ?></div>
    <script src="ejercicio9.js"></script>
</body>

</html>