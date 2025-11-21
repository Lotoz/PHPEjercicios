<?php
class banderaFranjas
{
    //Atributos
    private int $orientacion;
    private array $colores;
    private string $nombre;

    public function __construct(int $orientacion, array $colores, string $nombre = "sin adscripción")
    {
        $this->orientacion = $orientacion;
        $this->colores = $colores;
        $this->nombre = $nombre;
    }
    public function __destruct() {}

    public function getOrientacion()
    {
        return $this->orientacion;
    }
    public function getColores()
    {
        return $this->colores;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setOrientacion($newOrientacion)
    {
        $this->orientacion = $newOrientacion;
    }
    public function setColores($newColores)
    {
        $this->colores = $newColores;
    }
    public function setNombre($newNombre)
    {
        $this->nombre = $newNombre;
    }

    //Metodo que muestra por pantalla la bandera
    public function mostrarBandera(banderaFranjas $bandera)
    {
        foreach ($bandera->getColores() as $key => $value) {
            echo $value;
        }
    }
    public function comparaBanderas(banderaFranjas $bandera, banderaFranjas $bandera2)
    {
        //Comparamos ambos colores, son un array, buscar la funcion
    }
    public function comparaFranjaBandera(banderaFranjas $bandera, banderaFranjas $bandera2)
    {
        //Pasar los colores de una bandera a la misma horientacion y comparar
    }
    public function invierteColores(banderaFranjas $bandera)
    {
        //Invierte los colores de la franja de la bandera
    }
    public function invierteOrientacion(banderaFranjas $bandera)
    {
        //Invierte la orientaciond de las franjas
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas Bandera</title>
</head>

<body>
    <h1>Probando los metodos con banderas ya prehechas.</h1>
    <div>
        <h2>Prueba de mostrar la bandera correctamente</h2>
        <div>

        </div>
    </div>
    <div>
        <h2>Prueba de comparar banderas</h2>
        <div>

        </div>
    </div>
    <div>
        <h2>rueba de comparar ignorando la orientacion</h2>
        <div>

        </div>
    </div>
    <div>
        <h2>Prueba de invertir colores</h2>
        <div>

        </div>
    </div>
    <div>
        <h2>Prueba de inviertir orientacion de franjas</h2>
        <div>

        </div>
    </div>
</body>

</html>