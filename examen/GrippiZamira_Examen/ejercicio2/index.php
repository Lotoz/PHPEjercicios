<?php
class Pila
{

    //Atributos
    private array $pila;
    private int $longitud;
    private int $elementos;

    function __construct(int $longitud, array $pila = [], int $elementos = 0)
    {
        $this->pila = $pila;
        $this->longitud = $longitud;
        $this->elementos = $elementos;
    }

    function __destruct() {}

    //Funcion push
    function push($element)
    {
        if ($this->longitud == count($this->pila)) {
            return null;
        } else {
            $this->elementos = $this->elementos + 1;
            array_push($this->pila, $element);
            return $element;
        }
    }
    //Funcion pull
    function pop()
    {   //Testear
        if (count($this->pila) == 0) {
            return null;
        } else {
            $this->elementos = $this->elementos - 1;
            return array_pop($this->pila);
        }
    }

    function getElementos()
    {
        return $this->elementos;
    }

    function getPila()
    {
        return implode(",", $this->pila);
    }
    //Devuelve una cadena string
    function __toString()
    {
        if (count($this->pila) == 0) {
            return "La pila esta vacia.";
        }
        return $this->getPila();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de pila</title>
</head>

<body>
    <?php
    //Si esta llena avisa al usuario
    function controladorPush($valor): string
    {
        if (is_null($valor)) {
            return "La pila esta llena. El elemento no se introduce.  <br>";
        } else {
            return "Se ha introducido el elemento ( $valor )  en la pila. <br>";
        }
    }
    //Si esta vacia avisa al usuario
    function controladorPop($valor): string
    {
        if ($valor == null) {
            return "La pila esta vacia.<br>";
        } else {
            return "El elemento extraido es ( $valor ) <br>";
        }
    }
    //creamos una pila de tamano 10
    $pila10 = new Pila(10);

    //Insertamos un 5 y controlamos la entrada
    echo controladorPush($pila10->push(5));

    //Insertamos un 3 y controlamos la entrada
    echo controladorPush($pila10->push(3));


    echo "El tamaño de la pila es : " . $pila10->getElementos();

    echo "<br>";

    //Quitar un elemento de la pila
    echo controladorPop($pila10->pop());

    //Probando otros metodos
    echo "<br>";
    echo "El tamaño de la pila es : " . $pila10->getElementos();
    echo "<br>";
    echo "Mostrar pila: <br>" .  $pila10->__toString();
    ?>
</body>

</html>