<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP - Examen</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars('proceso.php'); ?>" method="post">
    <h3>
      Introduce dos cadenas y te calculo la distancia Hamming entre ellas
    </h3>
    <div>
      <label for="cadena1">Dame una frase:</label>
      <input type="text" id="cadena1" name="cadena1" required />
    </div>
    <div>
      <label for="cadena2">Dame una frase:</label>
      <input type="text" id="cadena2" name="cadena2" required />
    </div>
    <div>
      <button type="submit">Enviar</button>
    </div>
  </form>
</body>

</html>