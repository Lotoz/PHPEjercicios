<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/relacion1/playamar.png" type="image/x-icon">
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
         // El setter para modificar el nombre
        public function set_color($color)
        {
            $this->color = $color;
        }

        // El getter para obtener el nombre
        public function get_color()
        {
            return $this->color;
        }
    }

    // Creamos dos instancias de la clase Fruta
    $fruta1 = new Fruta("Manzana", "Rojo");
    $fruta2 = new Fruta("Banana", "Amarillo");

    // Mostramos los nombres por pantalla
    echo "Fruta 1: " . $fruta1->get_name() .", ".$fruta1->get_color(). "<br>";
    echo "Fruta 2: " . $fruta2->get_name() . ", ".$fruta2->get_color(). "<br>";

    //Ahora cambiamos el nombre de la manzana
    $fruta1->set_name("Pera");
    $fruta1->set_color("Verde");
    echo "Fruta 1 (despues de cambiar el nombre): " . $fruta1->get_name() . ", ".$fruta1->get_color(). "<br>";
    ?>
</body>

</html>