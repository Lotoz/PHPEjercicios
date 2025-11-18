
<?php
class restaurante
{
    /*
    Esto hasta la version 8
    //Atributos
    //Se de public String $nombre;
    public String $tipoCocina;
    //Siempre estructuras de datos privadas 
    private array $ratings; //Se puede iniciar aqui
    //Creacion del objeto restaurante
    public function __construct($nombre, $tipoCocina, $ratings = []) //Se puede llamar con 2 y con 3, asi se puede crear flexible
    {
        $this->nombre = $nombre;
        $this->tipoCocina = $tipoCocina;
        $this->ratings = $ratings;
    }finen los tipos como java
    */
    //Atributo static
    private static $restaurantes = 0; // un contador de la clase, para saber cuantos se han creado

    public function __construct(
        private String $nombre,
        private String $tipoCocina,
        private array $ratings = []
    ) {
        //Para llamar a la clase
        //El self chiquito es para trabjar con estos attributos staticos
        Self::$restaurantes++;
    }

    //El destructor
    public function __destruct()
    {
        // echo "Restaurante $this->nombre eliminado"; No deberia haber nada
    }

    //to String
    //Se podria agregar un if para complementar si esta vacio
    public function __toString()
    {
        return 'El nombre es: ' + $this->nombre + '<br> Su tipo de cocina es: ' + $this->tipoCocina + ' <br> Su promedio de ratings es: ' + calcularRatingMedio();
    }
    //Obtener el numero de ratings
    public function getRatings()
    {
        return $this->ratings;
    }
    private function mostrarRatings()
    {
        //con un foraeach
        echo 'no implementado';
    }
    //Agregar ratings
    public function setRatings($nuevaRating)
    { //Hay un error aqui
        array_push($this->ratings, $nuevaRating);
    }
    //Agrega otros ratings
    //Falla el public por alguna razon
    public function agregaOtros(...$nuevos)
    {
        $this->ratings = array_merge($this->ratings, $nuevos);
    }
    //Calcular el rating medio 
    public function calcularRatingMedio()
    {
        /*$suma = 0;
        for ($i = 0; $i < count(self::$ratings); $i++) {
            $suma = self::$ratings[$i];
        }
        $promedio = $suma / count(self::$ratings);
        return $promedio;*/
        return array_sum($this->ratings) / count($this->ratings);
    }
}
