<!DOCTYPE html>
<html lang="en">
<?php
include 'objeto.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante - Objetos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Falta el coso de favicon
    Tenemos que hacer el javascript-->
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>

    <div class='contenedor position-absolute top-50 start-50 translate-middle'>
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1>Gestiona restaurante:</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div>
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" id="nombre">
                    <button type="submit" name='cambiar' id='cambiar'>cambiar</button>
                </div>
                <div>
                    <label for="tipo">Tipo de restaurante:</label>
                    <input type="text" name="tipo" id="tipo">
                </div>
                <div class="secundario">
                    <label for="rating">Quieres agregar ratings?</label>
                    <input type="text" name="rating" id="rating">
                </div>
                <button type="submit" name='enviar' id='enviar'>enviar</button>
                <button type="submit" name='mostrar' id='mostrar'>mostrar</button>
            </form>
        </div>
        <?php
        //Para verificar el boton necesita name e id
        $newRestaurante;
        if (isset($_REQUEST['enviar'])) {
            //Creamos un restaurante
            $nombre = $_REQUEST['nombre'];
            $tipo = $_REQUEST['tipo'];
            $rating = $_REQUEST['rating'];
            $newRestaurante = new restaurante($nombre, $tipo);
            //Agregamos el rating
            //Asi se declaran las funciones

            /**
             * Si es funcion static : 
             * Si es con parametros ->
             */
        }
        if (isset($_REQUEST['mostrar'])) {
            $newRestaurante->__toString();
        }

        ?>

    </div>

</body>

</html>