<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Menu Restaurante</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container py-4">
    <h1 class="tituloPrincipal mb-4">Nuestro menú hoy es:</h1>

    <?php
    // Datos del menú
    $menu = [
        'Entrante' => ['Ensalada César','Hummus','Boquerones al natural'],
        'Primero'  => ['Gazpachuelo','Salmorejo','Ajo Blanco'],
        'Segundo'  => ['Fritura Malagueña','Conejo al ajillo','Pisto con huevo'],
        'Postre'   => ['Helado 3 sabores','Flan','Tarta de Queso']
    ];

    // Mapeo a nombres de imágenes (archivos esperados en ./assets/pictures/*.jpg)
    function fotoSegun($comida) {
        $map = [
            'Ensalada César' => 'ensaladaCesar',
            'Hummus' => 'hummus',
            'Boquerones al natural' => 'boquerones',
            'Gazpachuelo' => 'gazpachuelo',
            'Salmorejo' => 'salmorejo',
            'Ajo Blanco' => 'ajoblanco',
            'Fritura Malagueña' => 'frituraMalaguena',
            'Conejo al ajillo' => 'conejillo',
            'Pisto con huevo' => 'pistoconhuevo',
            'Helado 3 sabores' => 'helado3',
            'Flan' => 'flan',
            'Tarta de Queso' => 'tartaDeQueso'
        ];
        return $map[$comida] ?? 'error';
    }

    // Genera hasta $cantidad menus únicos (sin repetidos de combinaciones). Límite total 81.
    function generaMenusUnicos(int $cantidad, array $menu): array {
        // calcular total combinaciones
        $counts = array_map('count', $menu);
        $total = array_product($counts);
        $limite = min($cantidad, $total);

        $generados = [];
        $visto = [];

        // Para generar aleatoriamente sin repetidos intentamos hasta que lleguemos al límite
        $intentos = 0;
        $maxIntentos = $limite * 50; // guard para romper si algo fuera raro

        while (count($generados) < $limite && $intentos < $maxIntentos) {
            $intentos++;
            $combo = [];
            foreach ($menu as $tipo => $opciones) {
                $combo[$tipo] = $opciones[array_rand($opciones)];
            }
            $key = implode('|', $combo);
            if (!isset($visto[$key])) {
                $visto[$key] = true;
                $generados[] = $combo;
            }
        }
        return $generados;
    }

    // Manejo del formulario
    $mensaje = '';
    $menusGenerados = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cantidadDeMenu = isset($_POST['cantidadDeMenu']) ? (int)$_POST['cantidadDeMenu'] : 0;
        if ($cantidadDeMenu < 1) {
            $mensaje = 'Introduce un número mínimo de 1.';
        } else {
            // límite 81 (3^4)
            $maxTotal = array_product(array_map('count', $menu)); // 81 en este caso
            if ($cantidadDeMenu > $maxTotal) {
                $mensaje = "Has pedido {$cantidadDeMenu} menús, pero solo hay {$maxTotal} combinaciones únicas. Se generarán {$maxTotal}.";
            }
            $menusGenerados = generaMenusUnicos($cantidadDeMenu, $menu);
        }
    }
    ?>

    <form method="post" class="row g-2 align-items-center mb-4">
        <div class="col-auto">
            <label for="cantidadDeMenu" class="col-form-label">Número de menús (máx <?php echo array_product(array_map('count', $menu)); ?>):</label>
        </div>
        <div class="col-auto">
            <input type="number" min="1" max="<?php echo array_product(array_map('count', $menu)); ?>" id="cantidadDeMenu" name="cantidadDeMenu"
                   class="form-control" value="<?php echo isset($cantidadDeMenu) ? htmlspecialchars($cantidadDeMenu) : '1'; ?>">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Generar</button>
        </div>
    </form>

    <?php if ($mensaje): ?>
        <div class="alert alert-info"><?php echo htmlspecialchars($mensaje); ?></div>
    <?php endif; ?>

    <?php if (!empty($menusGenerados)): ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($menusGenerados as $index => $unMenu): ?>
                <div class="col">
                    <div class="card h-100">
                        <?php
                        // Mostrar la imagen del primer plato (entrante) como imagen principal; también se pueden mostrar miniaturas debajo.
                        // Aquí elegimos mostrar una imagen compuesta con la del Entrante por simplicidad.
                        $primeraImagen = fotoSegun($unMenu['Entrante']);
                        $imgPath = "./assets/pictures/{$primeraImagen}.jpg";
                        ?>
                        <img src="<?php echo htmlspecialchars($imgPath); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($unMenu['Entrante']); ?>" onerror="this.src='./assets/pictures/error.jpg'">
                        <div class="card-body">
                            <h5 class="card-title">Menú #<?php echo $index + 1; ?></h5>
                            <ul class="list-unstyled mb-2">
                                <?php foreach ($unMenu as $tipo => $plato): ?>
                                    <li><strong><?php echo htmlspecialchars($tipo); ?>:</strong> <?php echo htmlspecialchars($plato); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="d-flex gap-2">
                                <?php foreach ($unMenu as $plato): 
                                    $img = fotoSegun($plato);
                                    $src = "./assets/pictures/{$img}.jpg";
                                ?>
                                    <img src="<?php echo htmlspecialchars($src); ?>" alt="<?php echo htmlspecialchars($plato); ?>" class="img-thumbnail" style="width:56px;height:56px;object-fit:cover" onerror="this.src='./assets/pictures/error.jpg'">
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="alert alert-warning">No se pudieron generar menús.</div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+AMvyTG2Y1Qp6MZV9zzTtmI3Uksd+" crossorigin="anonymous"></script>
</body>
</html>