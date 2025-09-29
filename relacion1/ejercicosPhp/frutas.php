<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <title>Clases</title>
</head>

<body>
    <h1>Ejemplo de clases en PHP</h1>
    <?php
    //Es como java y javaScript
    // Declaramos la clase Fruta
    class Fruta
    {
        // Colocamos sus atributos
        private $nombre;
        private $color;

        //Constructor donde los inicializamos
        public function __construct($nombre, $color)
        {
            $this->nombre = $nombre;
            $this->color = $color;
        }

        // El setter para modificar el nombre
        public function set_name($nombre)
        {
            $this->nombre = $nombre;
        }

        // El getter para obtener el nombre
        public function get_name()
        {
            return $this->nombre;
        }
    }

    // Creamos dos instancias de la clase Fruta
    $apple = new Fruta("Manzana", "Rojo");
    $banana = new Fruta("Banana", "Amarillo");

    // Mostramos los nombres por pantalla
    echo "Fruta 1: " . $apple->get_name() . "<br>";
    echo "Fruta 2: " . $banana->get_name() . "<br>";

    //Ahora cambiamos el nombre de la manzana
    $apple->set_name("Pera");
    echo "Fruta 1 (despues de cambiar el nombre): " . $apple->get_name() . "<br>";
    ?>
</body>

</html>