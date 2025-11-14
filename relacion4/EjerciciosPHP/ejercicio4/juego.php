<?php

session_start();
//El servidor piensa en un numero de 1 a 100
//Controlamos que solo se genere una vez
if (!isset($_SESSION['numServer'])) {
    $_SESSION['numServer'] = rand(1, 100);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php
    $_SESSION['color'] = '';
    $_SESSION['mensaje'] = '';
    //Cuenta cuantos intentos ha hecho el usuario

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numUser = $_REQUEST['numUser'];

        if ($numUser == $_SESSION['numServer']) {
            $_SESSION['mensaje'] = 'Has ganado! Si quieres jugar de nuevo ingresa otro numero.';
            $_SESSION['color'] = 'alert-success';
            session_destroy();
        } else {
            if ($numUser > $_SESSION['numServer']) {
                $_SESSION['mensaje'] = 'Te has pasado.';
                $_SESSION['color'] = 'alert-danger';
            } else {
                $_SESSION['mensaje'] = 'Te has quedado corto.';
                $_SESSION['color'] = 'alert-warning';
            }
        }
    }

    ?>
    <h1>Adivinar el numero, the game.</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="numUser">Ingresa el numero que pienses que es:</label>
        <input type="number" name="numUser" id="numUser">
        <button type="submit" id='enviar'>Enviar</button>
    </form>



    <div class='alert <?php echo $_SESSION['color']; ?> ' role=' alert'>
        <?php echo $_SESSION['mensaje'];
        ?>
    </div>

</body>

</html>