<?php
session_start(); //Iniciamos la sesion acaba arriba
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Falta el coso de favicon
    Tenemos que hacer el javascript-->
</head>

<body>
    <!--Hacer el style con bootstrap-->
    <div>
        <form action="<?php echo htmlspecialchars('1con-cookies.php'); ?>" method="post">
            <div>
                <label for="idUsuario">identificador:</label>
                <input type="text" name="idUsuario" id="idUsuario">
                <div id="usuarioHelp">Obligatorio</div>
            </div>
            <div>
                <label for="contrasena">Password</label>
                <input type="text" name="contrasena" id="contrasena">
                <div id="contrasenaHelp">Obligatorio</div>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <?php
    if (isset($_SESSION['errorLogin'])) {
        echo "<div class='alert alert-danger' role='alert'>
             No se quien sos pa
            </div>";
        //Quita el alert
        unset($_SESSION['errorLogin']);
    }
    ?>

</body>

</html>