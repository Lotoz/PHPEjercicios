<?php
interface Encendible
{
    public function encender();
    public function apagar();
}
//Clase bombilla
class Bombilla implements Encendible
{
    //Atributos
    private string $tipoBombilla;
    private float $lumenes;
    private bool $estado;

    public function __construct($tipoBombilla, $lumenes, $estado = false)
    {
        $this->tipoBombilla = $tipoBombilla;
        $this->lumenes = $lumenes;
        $this->estado = $estado;
    }
    public function encender()
    {
        $this->estado = true;
        echo 'Se ha encendido la bombilla';
    }
    public function apagar()
    {
        $this->estado = false;
        echo 'Se ha pagado la bombilla';
    }
}
class Motocicleta implements Encendible
{
    public function __construct(
        private string $matricula,
        private float $gasolina = 0,
        private int $bateria = 2,
        private bool $estado = false
    ) {}

    public function cargarGasolina($nuevosLitros)
    {
        return $this->gasolina = $this->gasolina + $nuevosLitros;
    }
    public function encender()
    {
        if ($this->gasolina > 0 && $this->bateria > 0 && $this->estado != false) {
            $this->estado = true;
            echo 'Se ha el encendido la moto';
        } else {
            echo 'No se puede encender la moto';
        }
    }
    public function apagar()
    {
        if ($this->estado == true) {
            $this->estado = false;
            echo 'Se ha apagado la moto';
        } else {
            echo 'La moto ya esta apagada';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widechoth, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>
    <?php
    function enciende_algo(Encendible $algo)
    {
        $algo->encender();
    }
    $miBombilla = new Bombilla("led", 12);
    $miMoto = new Motocicleta("3873 NXB");
    enciende_algo($miBombilla);
    echo '<br>';
    enciende_algo($miMoto);

    ?>
</body>

</html>