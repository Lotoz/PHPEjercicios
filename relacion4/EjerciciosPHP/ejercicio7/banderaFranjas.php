<?php
class banderaFranjas
{
    // 0 horizontal, 1 vertical
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

    // Getters
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

    // Setters
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

    // Mostrar bandera en pantalla
    public function mostrarBandera()
    {
        $orientacion = $this->orientacion;
        $colores = $this->colores;

        $style = "width:200px; height:130px; display:flex; 
                  " . ($orientacion == 0 ? "flex-direction:column;" : "flex-direction:row;");

        echo "<div style='$style; border:1px solid black; margin:10px 0;'>";
        foreach ($colores as $color) {
            echo "<div style='flex:1; background:$color;'></div>";
        }
        echo "</div>";
    }

    // Comparar bandera exactamente (orientación y colores)
    public function comparaBanderas(banderaFranjas $bandera2): bool
    {
        return $this->orientacion === $bandera2->getOrientacion()
            && $this->colores === $bandera2->getColores();
    }

    // Comparar ignorando orientación
    public function comparaFranjaBandera(banderaFranjas $bandera2): bool
    {
        return $this->colores === $bandera2->getColores();
    }

    // Invierte colores
    public function invierteColores(): void
    {
        $this->colores = array_reverse($this->colores);
    }

    // Invierte orientación
    public function invierteOrientacion(): void
    {
        $this->orientacion = $this->orientacion === 0 ? 1 : 0;
    }
}

//! Bamderas de prueba
$bandera1 = new banderaFranjas(0, ["red", "yellow", "red"], "España");
$bandera2 = new banderaFranjas(1, ["red", "yellow", "red"], "España vertical");
$bandera3 = new banderaFranjas(0, ["blue", "white", "red"], "Francia invertida");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas Bandera</title>
</head>

<body>
    <h1>Probando métodos de la clase banderaFranjas</h1>

    <!-- Mostrar bandera -->
    <div>
        <h2>1. Prueba de mostrar bandera</h2>
        <?php $bandera1->mostrarBandera(); ?>
    </div>

    <!-- Comparar banderas exactamente -->
    <div>
        <h2>2. Comparación exacta (orientación + colores)</h2>
        <?php
        echo "Comparando España horizontal con España vertical: ";
        echo $bandera1->comparaBanderas($bandera2) ? "Iguales" : "Distintas";
        ?>
    </div>

    <!-- Comparación ignorando orientación -->
    <div>
        <h2>3. Comparar ignorando orientación (solo colores)</h2>
        <?php
        echo "Comparando España horizontal con España vertical: ";
        echo $bandera1->comparaFranjaBandera($bandera2) ? "Iguales" : "Distintas";
        ?>
    </div>

    <!-- Invertir colores -->
    <div>
        <h2>4. Invertir colores</h2>
        <?php
        echo "Colores originales de bandera Francia invertida:";
        $bandera3->mostrarBandera();

        $bandera3->invierteColores();
        echo "Colores invertidos:";
        $bandera3->mostrarBandera();
        ?>
    </div>

    <!-- Invertir orientación -->
    <div>
        <h2>5. Invertir orientación de la bandera</h2>
        <?php
        echo "Antes:";
        $bandera2->mostrarBandera();

        $bandera2->invierteOrientacion();
        echo "Después:";
        $bandera2->mostrarBandera();
        ?>
    </div>

</body>

</html>