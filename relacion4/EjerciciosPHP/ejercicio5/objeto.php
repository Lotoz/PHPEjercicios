<?php
class restaurante
{
    //Atributos
    public $nombre;
    public $tipoCocina;
    public $ratings;
    //Creacion del objeto restaurante
    public function __construct($nombre, $tipoCocina)
    {
        $this->nombre = $nombre;
        $this->tipoCocina = $tipoCocina;
        $this->ratings = [];
    }

    //El destructor
    public function __destruct()
    {
        echo 'Se ha destruido, supongo';
    }

    //to String
    public function __toString()
    {
        return 'El nombre es: ' + $this->nombre + 'Su tipo de cocina es: ' + $this->tipoCocina + 'Su promedio de ratings es: ' + $this->calcularRatingMedio();
    }
    //Obtener el numero de ratings
    public function getRatings()
    {
        $numeroEntotal = count(self::$ratings);
        return $numeroEntotal;
    }
    //Agregar ratings
    public function setRatings($nuevaRating)
    { //Hay un error aqui
        array_push(self::$ratings, $nuevaRating);
    }
    //Agrega otros ratings
    public function agregaOtros(...$nuevos)
    {
        array_merge(self::$ratings, $nuevos);
    }
    //Calcular el rating medio 
    public function calcularRatingMedio()
    {
        $suma = 0;
        for ($i = 0; $i < count(self::$ratings); $i++) {
            $suma = self::$ratings[$i];
        }
        $promedio = $suma / count(self::$ratings);
        return $promedio;
    }
}
