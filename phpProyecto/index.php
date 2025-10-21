<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCP-WEB</title>
</head>
<body>
    <div id="cajaLogin">
<!--Mejorar la estetica. El code-secure debe estar oculto, si se entera que es level 3>, debe salir el code-secure y pedirlo segun las tarjetas de usuario.
Ya que cada usuario tiene un nivel diferente de acceso y de informacion.
El proyecto tendra en total 16 SCP (Se puede ver si mas):
Primer scp 999.(todos tienen acceso)
Segundo scp 035. (Solo acceso nivel 3>)


Muy importante, buscar como se pueden controlar la vision desde la base de datos.Seguro sera creando un valor llamado nivel.
Crear y planear la base de datos.
Asi se pueden hacer pruebas de como se comunica la base de datos con php. 
Pero necesitas que este desarollada en mysql-->
        <form>
            <div>
                <label for="username" >Username</label>
                <input type="text" id="user" name="user"  class="form-control">
            </div>
            <div>
                <label for="password" >Password</label>
                <input type="password" id="password" name="password"  class="form-control">
            </div>
            <div id="codeSecure">
                <label for="codeSecure">Code-Secure</label>
                <input type="password" id="codeSecure" name="codeSecure"  class="form-control">
            </div>
        </form>
    </div>
</body>
</html>