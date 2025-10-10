<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <title>Nota Media</title>
</head>
<body>
     <div class="d-flex justify-content-center aling-items-center mt-5">
        <!--Cuando el calculo esta en el propio archivo, hay que llamarlo desde action(a si mismo)-->
        <form class="p-3 shadow rounded" action="calculo.php" method="post" onsubmit="return validarFormularioNotas()">
            <h3>Nota media del alumnado</h3>
            <div class=mb-3>
                <label class="form-label" for="nombre">Nombre del alumno:<span class="text-danger">*<span></label>
                <input class="rounded" type="text" id="nombre" name="nombre" placeholder="Requerido" require>
                <div class="form-text text-danger" id="nombreMal"></div>
            </div>
            <div class=mb-3>
                <label class="form-label" for="number1">Nota 1:<span class="text-danger">*<span></label>
                <input class="rounded" type="text"  id="nota1" name="nota1" placeholder="2 cifras decimales">
            </div>
            <div>
                <label class="form-label" for="number2">Nota 2:<span class="text-danger">*<span></label>
                <input class="rounded" type="text" id="nota2" name="nota2" placeholder="2 cifras decimales">
                <div class="form-text text-danger" id="nota1Mal"></div>
            </div>
            <div>
                <label class="form-label" for="number2">Cantidad de faltas:<span class="text-danger">*<span></label>
                <input class="rounded" type="text" id="faltas" name="faltas" placeholder="2 cifras decimales">
                <p class="text-danger" id="faltasMal"></p>
            </div>
             <div class=mb-3>
                <label class="form-label" for="number1">Correo:<span class="text-danger">*<span></label>
                <input class="rounded" type="email" id="correo" name="correo" placeholder="Requerido" require>
                <p class="text-danger" id="emailMal"></p>
            </div>
            <div>
                <input type="submit" value="Calcular" class="btn-outline-info" />
            </div>
        </form>
    </div>
    <script src="validaciones.js"></script>
</body>
</html>