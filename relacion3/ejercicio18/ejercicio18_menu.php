<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Restaurante</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--CSS Personalizado-->
    <link rel="stylesheet" href="./assets/css/style.css"/>
    <!--Iconos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div>
        <h1 class="tituloPrincipal ">Nuestro menu hoy es: </h1>
    </div>
    <div class="formulario ">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="cantidadDeMenu"></label>
        <input type="number" name="cantidadDeMenu" id="cantidadDeMenu">
    </form>
    </div>
    <div class="menus">
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $cantidadDeMenu = $_POST['cantidadDeMenu'];
                //Array de los menu
                $menu = [
                    'entrante' => array('Ensalada César','Hummus','Boquerones al natural'),
                    'primero' => array('Gazpachuelo','Salmorejo','Ajo Blanco'),
                    'segundo' => array('Fritura Malagueña','Conejo al ajillo','Pisto con huevo'),
                    'postre' => array('Helado 3 sabores','Flan','Tarta de Queso')
                ];
                //Declaramos una funcion con switch, ya que deberemos evaluar que segun el resultado del array devuelva una foto
                function fotoSegun($comida) {
                    switch ($comida) {
                        case 'Ensalada César':
                            return 'ensaladaCesar';
                        case 'Hummus':
                            return  'hummus';
                        case 'Boquerones al natural':
                            return 'boquerones';
                        case 'Gazpachuelo':
                            return 'gazpachuelo';
                        case 'Salmorejo':
                            return 'salmorejo';
                        case 'Ajo Blanco':
                            return 'ajoblanco';
                        case 'Fritura Malagueña':
                            return 'frituraMalaguena';
                        case 'Conejo al ajillo':
                            return 'conejillo';
                        case 'Pisto con huevo':
                            return 'pistoconhuevo';
                        case 'Helado 3 sabores':
                            return 'helado3';
                        case 'Flan':
                            return 'flan';
                        case 'Tarta de Queso':
                            return 'tartaDeQueso';
                        default:
                            return 'error';
                    }
                }
                //Con esta funcion funcional ahora con solo una imagen, pasamos a crear una funcion que nos genera las cards
                //Asi se recorre el array, ya tengo acceso a todos los datos
                //Funciona un tanto discapacitado
                function generaMenus($cantidadAGenerar, $menu){
                    //la cantidad de menus que el usuario le pide
                    for ($i=0; $i < $cantidadAGenerar ; $i++) { 
                    //Inicio un array de los menus
                    //Creo un array que guarda los menus generados
                    $menusAleatorios = [];
                    foreach ($menu as $tipo => $opciones) {
                        //Agarra los array de manerala aleatoria
                        $menusAleatorio[$tipo] = $opciones[array_rand($opciones)];
                        //echo '<br>'.$menusGen[$tipo];


                    }
                    $menu = $menusAleatorios;    
                }
                    return $menu;
                }
                $menus = generaMenus($cantidadDeMenu, $menu);
                //Ahora generamos las cards
                
                    
                foreach ($menus as $tipo => $array) {
                    foreach ($array as $tipo=> $comida) {
                        echo $comida;
                    }
                }
                    
                

                /**
                 * echo "<div class='card' style='width: 18rem;'>";
                 * 
                 * $resultado = $opciones[array_rand($opciones)];
                        $cadena = fotoSegun($opciones[1]);
                        echo '<img src="./assets/pictures/'.$cadena.'.jpg" class="card-img-top" alt="$cadena" width="50" height="50">';
                        echo '<div class="card-body">';
                        echo '<p class="card-text">';
                        echo $resultado;
                        echo '</p>';
                 * echo ' </div>
                        </div>';
                 * for ($i = 0; $i < $n; $i++) {
  $m = [];
  foreach ($menu as $tipo => $opciones) {
    $m[$tipo] = $opciones[array_rand($opciones)];
  }
  $menus[] = $m;
}
Acceso de un array con  un array
foreach ($menu as $key => $value) {
                    for ($i=0; $i < count($value); $i++) { 
                        echo '<br>'.$key.'<br>'.$value[$i];
                    }
                }
                 * ;
                    
                       
                        
                        for ($i=0; $i < count($value) ; $i++) { 
                        echo $value;
                    }

                    
                 */
            }
        ?>
    </div>
</body>
</html>