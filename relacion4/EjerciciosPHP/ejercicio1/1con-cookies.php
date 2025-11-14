<?php
session_start(); //Iniciamos la sesion acaba arriba
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando cookies y variables de sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid w-75">
        <!--Para comprobar base de datos y se debera analizar el de la base de datos-->
        <?php
        //Se deberia tener hasta en una libreria aparte
        //Pillamos las variables de afuera
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            function compruebaAcceso($id, $pass)
            {
                define("USUARIO_CORRECTO", 'Alibaba');
                define("PASS_CORRECTA", 'Abrete sesamo');
                return ($id == USUARIO_CORRECTO and $pass == PASS_CORRECTA);
            }
            //Variables del formulario
            //Hay un array llamado $_REQUEST[viene todoo, tanto get como post]
            $idusuario = $_POST['idUsuario'];
            $contrasena  = $_POST['contrasena'];
            //Eliminar la sesion
            unset($_SESSION['errorLogin']);
            if (compruebaAcceso($idusuario, $contrasena)) {
                setcookie('usuario', $idusuario); //Cookie permanente

                if (isset($_COOKIE['usuario'])) {
                    //Demostracion de usuario
                    echo "Te llamas " . $_COOKIE['usuario'] . '<br>'; //se almacena en el cliente
                }
                //Muestra el numero de session
                //Este apache no limpia bien y a veces aunque cierres la sesion se queda el mismo
                echo session_id();
                //Se usan para un chingo de cosas, es una cabecera htlp ? 
                //header(refresh, true, 0);
                //Le damos al valor de sesion al usuario de la sesion que hemos iniciado
                $_SESSION['usuario'] = $idusuario; //Esto deberia ser un token correctamente
                echo "Tu eres: " . $_SESSION['usuario']; //Esta se almacena en el servidor
            } else {
                $_SESSION['errorLogin'] = true;
                header("Location: login.php");
            }
        }

        ?>
    </div>
</body>

</html>