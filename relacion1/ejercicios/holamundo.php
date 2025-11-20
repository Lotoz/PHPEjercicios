<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacion 1 - Hello world</title>
    <link rel="shortcut icon" href="/relacion1/playamar.png" type="image/x-icon">
</head>

<body>
    <!-- Texto plano HTML -->
    Hello world

    <!-- Encabezado de nivel 2 HTML -->
    <h2>
        <?php
        echo "Hello world";
        ?>
    </h2>

    <!-- Párrafo con estilo -->
    <p style="color: purple; font-family: Arial, sans-serif; text-align: center; font-size: 20px;">
        <?php
        echo "Hello world";
        ?>
    </p>

    <!-- Salto de línea entre hello y world -->
    <p>
        <?php
        echo "Hello<br>world";
        ?>
    </p>

    <!-- Información sobre la instalación PHP -->
    <h3>Información de PHP</h3>
    <p>Versión de PHP:
        <?php
        echo phpversion();
        ?>
    </p>
    <details>
        <summary>Mostrar phpinfo()</summary>
        <?php
        //Cuando se activa esto se pone todo negro
        //phpinfo();
        ?>
    </details>

    <!-- Fecha y hora del sistema -->
    <h3>Fecha y hora actual</h3>
    <p>
        <?php
        // Muestra la fecha y hora actual del sistema
        echo date("d/m/Y H:i:s");
        ?>
    </p>

    <!-- Comentarios en PHP -->
    <?php
    // Comenatario 1

    /*
    Comenatario 2
    */
    ?>
</body>

</html>