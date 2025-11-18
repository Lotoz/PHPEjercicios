<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stdClass()</title>
</head>

<body>
    <?php
    //Creacion de los objetos de stdClass, clase comodin, no responde a ninguna estructura completa
    $miModulo = new stdClass();
    var_dump($miModulo);
    //Creacion de atributos sobre la marcha
    $miModulo->nombre = "Desarollo Web en Entorno Servidor";
    $miModulo->acronimo = "DWES";
    $miModulo->curso = 2;
    echo '<br>Esto es lo que tiene ahora mi modulo<br>';
    var_dump($miModulo);

    //Conversion en array. -> El uso que normalmente se le da a este objeto
    $miModuloArray = (array) $miModulo;
    echo '<br> Conversion en array<br>';
    print_r($miModuloArray);

    //Ahora lo convierto en objeto
    $miModuloObjeto = (object) $miModuloArray;
    echo '<br> Conversion en objeto<br>';
    var_dump($miModuloObjeto);
    /*
        Esto es para convertir array asociativos en objetos, para cumplimentar en base de datos
        Sigue teniendo problemas gordos pero es interesantes
    */

    //Prueba de unseralize y seralize
    //Vamos a serializarlo
    $miModuloArraySerializado = serialize($miModuloArray);
    echo '<br> serialize() Al array <br>';
    var_dump($miModuloArraySerializado);
    $miModuloArrayUnserializado = unserialize($miModuloArraySerializado);
    echo '<br> unserialize() Al serialize() <br>';
    var_dump($miModuloArrayUnserializado);
    ?>
</body>

</html>