/*************************************************** |
 *                                                   |
 * Validaciones para el formulario del ejercicio 12  |
 * Creado por Z.G_Lotoz                              |
 * Version1                                          |
 * ************************************************* |
 */
function validarFormularioNotas() {
    var nota1 = parseFloat(document.getElementById('nota1').value);
    var nota2 = parseFloat(document.getElementById('nota2').value);
    var faltas = parseFloat(document.getElementById('faltas').value);
    //Igual salvo cero
    var nombre = document.getElementById('nombre').value;
    //No este vacio
   //var correo = document.getElementById('correo').value;
    //Formato de email
    validacion = true;
    if(!validaNotas(nota1)){
       validacion = false;
    }
    if (!validaNotas(nota2)) {
        validacion = false;
    }
    if (!validaFaltas(faltas)) {
        validacion = false;
    }
    if (!cadenaValidador(nombre)) {
        validacion = false;
    }
    return validacion;
    //Debo devolver true al punto de llamafa.
    //Se debe especificar la vuelta de un false, para que no mande nada

}
function validaNotas(nota) {
     var errorNota1 = document.getElementById('nota1Mal');
    if (!isNaN(nota)) {
        if (Number.isInteger(nota)) {
            if (nota >= 1 && nota <= 10) {
                return true;
            } else {
                errorNota1.textContent = "La nota no es valida, debe estar entre 1 y 10.";
                return false;
            }
        } else{
            errorNota1.textContent = "La nota no es valida, debe ser un numero entero";
            return false;
        }
    }else{
        errorNota1.textContent = "La nota no es valida, debe ser numerica y entera.";
        return false;
    }
}
function validaFaltas(faltas) {
       var faltasMal = document.getElementById('faltasMal');
    if (!isNaN(faltas)) {
        if (Number.isInteger(faltas)) {
            if (faltas >= 0) {
                 return true;
            } else {
                faltasMal.textContent = "Las faltas no son validas, debe ser cero o mayor a cero.";
                return false;
            }
        } else{
            faltasMal.textContent = "Las faltas no son validas, debe ser un numero entero";
            return false;
        }
    }else{
        faltasMal.textContent = "Las faltas no son validas, no son numericas.";
        return false;
    }
}
//Por ahora que es la mas dificil
//function validaCorreo() {
  //  return true;
//}
function cadenaValidador(cadena) {
      var nombreMal = document.getElementById('nombreMal');
    if (cadena.trim() == "") {
       nombreMal.textContent ="La cadena no tiene que estar vacia.";
        return false;
    }else{
        return true;
    }
}
