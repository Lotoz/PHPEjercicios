<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta del servidor</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div>
        <h1>Prueba</h1>
        <!--Prueba-->
    <?php
        function calculoPar($num1, $num2){
           $suma = $num1 + $num2;
            if ($suma % 2 == 0) {
               return true;
            } else {
                return false;
            }
        }
        $num1 =3;
        $num2 = 2;
    ?>
    <?php if (calculoPar($num1, $num2)): ?>
        <div class="alert alert-success">Es par.</div>
    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="alert alert-warning">Es impar.</div>
    <?php endif; ?>
    </div>
    
</body>
</html>