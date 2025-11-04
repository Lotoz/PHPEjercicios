<?php
// ejercicio13.php - múltiples operaciones de strings y muestra en alert Bootstrap
function is_palindrome($s) {
    $s2 = mb_strtolower(preg_replace('/[^\p{L}\p{N}]/u','', $s));
    return $s2 === strrev($s2);
}

$result_blocks = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $texto = $_POST['texto'] ?? '';
    $texto_trim = trim($texto);
    // reversed string
    $reversed = mb_strrev($texto_trim);
    $palindrome = is_palindrome($texto_trim) ? 'Sí' : 'No';
    // words reversed
    $words = preg_split('/\s+/', $texto_trim);
    $words_rev = implode(' ', array_reverse($words));
    // upper/lower
    $upper = mb_strtoupper($texto_trim);
    $lower = mb_strtolower($texto_trim);
    // counts
    $char_count = mb_strlen($texto_trim);
    $word_count = $texto_trim === '' ? 0 : count($words);
    // crypt/md5/sha1
    $crypted = crypt($texto_trim, 'rl');
    $md5 = md5($texto_trim);
    $sha1 = sha1($texto_trim);
    $result_blocks = [
        ['title' => 'Texto invertido', 'body' => $reversed . '<br>¿Palíndroma? ' . $palindrome, 'class'=>'primary'],
        ['title' => 'Palabras al revés', 'body' => htmlspecialchars($words_rev), 'class'=>'secondary'],
        ['title' => 'Mayúsculas / Minúsculas', 'body' => htmlspecialchars($upper) . '<br>' . htmlspecialchars($lower), 'class'=>'success'],
        ['title' => 'Recuento', 'body' => 'Caracteres: ' . $char_count . ' — Palabras: ' . $word_count, 'class'=>'warning'],
        ['title' => 'Hashes / crypt', 'body' => 'crypt: ' . htmlspecialchars($crypted) . '<br>md5: ' . $md5 . '<br>sha1: ' . $sha1, 'class'=>'danger']
    ];
}

// helper mb_strrev
if (!function_exists('mb_strrev')) {
    function mb_strrev($str) {
        $r = '';
        for ($i = mb_strlen($str)-1; $i>=0; $i--) $r .= mb_substr($str,$i,1);
        return $r;
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejercicio 13</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-3">
<div class="container">
  <h1>Ejercicio 13 - manipulación de strings</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="mb-3">
      <label for="texto" class="form-label">Texto</label>
      <input type="text" name="texto" id="texto" class="form-control" required>
    </div>
    <button class="btn btn-primary" type="submit">Procesar</button>
  </form>

  <hr>
  <?php foreach ($result_blocks as $b): ?>
    <div class="alert alert-<?php echo $b['class']; ?>" role="alert">
      <h4 class="alert-heading"><?php echo $b['title']; ?></h4>
      <p><?php echo $b['body']; ?></p>
    </div>
  <?php endforeach; ?>

</div>
<script src="ejercicio13.js"></script>
</body>
</html>
