<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejkercicio 17</title>
</head>
<body>
    <h1>Ejercicio 17</h1>
    <?php
    //Para mostrar los arrays
    /**
     * for ($i=0; $i < count($array); $i++) { 
                printf(" <li>$array[$i]<li>");
            }
     */
        function mostrarArrayLista($array){
            printf('<ul>');
            foreach ($array as $key => $value) {
                printf("<li> $key => $value </li>");
            }
            printf('</ul>');
        }
        function acomodaKeys($array){
            $acomodado = [];
            foreach ($array as $key => $value) {
                array_push($acomodado, $value);
            }
            return $acomodado;
        }
        $impares= range(1,20,2); //Para generar numeros impares
        $array2 = range(1,40,1); //Genera todos los numeros en ese parametro
        //Modificamos los arrays
        //$pares = array_filter($array1, fn($numero)=> $numero % 2 == 0);
        $filtrado = array_filter($array2, fn($numero)=> $numero % 3 == 0);
        //Usamos mi funcion para ordenar los arrays
        $multiplosDeTres = acomodaKeys($filtrado);
        //Ahora combinamos ambos arrays
        $union = array_merge($impares, $multiplosDeTres);
        //Uso de array count -> cuenta cuantas veces se repite algo en un array.Devuelve un array
        $repetidos = array_count_values($union);
        //Muestra el array en una lista
        mostrarArrayLista($repetidos);
        


       
    ?>  
</body>
</html>