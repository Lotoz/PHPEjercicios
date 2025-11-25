/**
 * Formulario mejorado
 * Hacer desde cero completo ver lo de sumbit y ver cual carajos es el error
 */
//Formulario
const FORMULARIO = document.getElementById('formulario');
//Los input
let nota1 = document.getElementById('nota1');
let nota2 = document.getElementById('nota2');
let faltas = document.getElementById('faltas');
let nombre = document.getElementById('nombre');
//Salida de errores
let errorNota1 = document.getElementById('nota1Mal');
let faltasMal = document.getElementById('faltasMal');


FORMULARIO.addEventListener("submit", function(event){
    event.preventDefault();
    validacion = true;
    if (!validaNotas(nota1)) {
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
    if (validacion) {
        FORMULARIO.sumbit();
    }
});
/**
 * Valida una nota
 * @param {*} nota 
 * @returns 
 */
function validaNotas(nota) { 
    if (!isNaN(nota)) {
        if (Number.isInteger(nota)) {
            if (nota >= 1 && nota <= 10) {
                return true;
            } else {
                errorNota1.textContent = "La nota no es valida, debe estar entre 1 y 10.";
                return false;
            }
        } else {   
            errorNota1.textContent = "La nota no es valida, debe ser un numero entero";
            return false;
        }
    } else {
        errorNota1.textContent = "La nota no es valida, debe ser numerica y entera.";
        return false;
    }
}

function validaFaltas(faltas) {
    if (!isNaN(faltas)) {
        if (Number.isInteger(faltas)) {
            if (faltas >= 0) {
                return true;
            } else {
                faltasMal.textContent = "Las faltas no son validas, debe ser cero o mayor a cero.";
                return false;
            }
        } else {
            faltasMal.textContent = "Las faltas no son validas, debe ser un numero entero";
            return false;
        }
    } else {
        faltasMal.textContent = "Las faltas no son validas, no son numericas.";
        return false;
    }
}
function cadenaValidador(cadena) {
    var nombreMal = document.getElementById('nombreMal');
    if (cadena.trim() == "") {
        nombreMal.textContent = "La cadena no tiene que estar vacia.";
        return false;
    } else {
        return true;
    }
}
