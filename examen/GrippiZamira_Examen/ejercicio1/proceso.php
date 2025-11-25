<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso</title>
</head>

<body>
    <div>
        <?php
        //Funciones
        function estanIncluidos(String $frase, String $caracteres, bool $caseSensitive = true): bool
        {
            if ($caseSensitive) {
                return strpbrk($frase, $caracteres);
            } else {
                $frase = strtolower($frase);
                $caracteres = strtolower($caracteres);
                return strpbrk($frase, $caracteres);
            }
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Purifica las entradas
            $frase = filter_input(INPUT_POST, 'cadena1', FILTER_SANITIZE_SPECIAL_CHARS);
            $caracteres = filter_input(INPUT_POST, 'cadena2', FILTER_SANITIZE_SPECIAL_CHARS);

            //Aplicando la funcion con caseSensitve
            $cadena1 = (estanIncluidos($frase, $caracteres, false)) ? "La frase contiene los caracteres introducidos" : "La frase no contiene con los caracteres introducidos";

            //Sin caseSensitive
            $cadena2 = (estanIncluidos($frase, $caracteres)) ? "La frase contiene los caracteres introducidos" : "La frase no contiene con los caracteres introducidos";

            echo "<h3>Con caseSensitive :</h3><p>" . $cadena1 . "</p><br>";
            echo "<h3>Sin caseSensitive :</h3><p>" . $cadena2 . "</p>";
        }
        ?>
    </div>

</body>

</html>