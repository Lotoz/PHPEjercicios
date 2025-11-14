<?php
session_start();
//Si se usa unset esto se repite 2 veces
//Cargamos siempre desde el inicio las cosas
if (!isset($_SESSION['A'])) {
    $_SESSION['A'] = 0;
    $_SESSION['B'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP sessiones practica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Falta el coso de favicon
    Tenemos que hacer el javascript-->
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        switch ($_REQUEST['selecciona']) {
            case 'AMAS':
                $_SESSION['A']++;
                break;
            case 'AMENOS':
                $_SESSION['A']--;
                break;
            case 'BMAS':
                $_SESSION['B']++;
                break;
            case 'BMENOS':
                $_SESSION['B']--;
                break;
            case 'resetearA':
                $_SESSION['A'] = 0;
                break;
            case 'resetearB':
                $_SESSION['B'] = 0;
                break;
            case 'destruir':
                $_SESSION['A'] = 0;
                $_SESSION['B'] = 0;
                session_destroy();
                //conjunto de spiners
                echo '

<div class="spinner-grow text-primary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-border text-primary" role="status">
  <span class="visually-hidden">Loading...</span>Loading...
</div>

';
                //Reinicia la pagina y tarda 30 segundos
                header('refresh: 30;'); //Refresca la pagina
                break;
            default:
                echo 'Ha fallado la selecicon';
                break;
        }
    } //Si fallara, se vuelve a declarar el if de arriba para destruir las unset
    ?>
    <h1>A : <?php echo $_SESSION['A']; ?></h1>
    <h1>B : <?php echo $_SESSION['B']; ?> </h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <select name="selecciona" id="selecciona">
            <option value="AMAS">Aumentar A</option>
            <option value="AMENOS">Disminuir a</option>
            <option value="BMAS">Aumentar b</option>
            <option value="BMENOS">Disminuir b</option>
            <option value="resetearA">Resetear A</option>
            <option value="resetearB">Resetear B</option>
            <option value="destruir">Destruir Session</option>
        </select>
        <button type="submit" name="enviar"><!--Es para mas formal preguntando eso-->
            Enviar
        </button>
    </form>
</body>

</html>