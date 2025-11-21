<?php
//Era con la funcion date no get date
/**
 * Segun el parametro que pase el usuario, devuelve lo pedido
 */
function getFecha($dato)
{
    $arrayDate = getdate();
    foreach ($arrayDate as $indice => $valor) {
        if ($indice == $dato) {
            return $valor;
        }
    }
}
function getDiaText(){
    $arrayDate = getdate();
    foreach ($arrayDate as $indice => $valor) {
        if ($indice == 'weekday') {
            return diaText($valor);
        }
    }
}
function getDia(){
    $arrayDate = getdate();
    foreach ($arrayDate as $indice => $valor) {
        if ($indice == 'wday') {
            return $valor;
        }
    }
}
function getMesText(){
    $arrayDate = getdate();
    foreach ($arrayDate as $indice => $valor) {
        if ($indice == 'month') {
            return mesText($valor);
        }
    }
}
function getMes(){
    $arrayDate = getdate();
    foreach ($arrayDate as $indice => $valor) {
        if ($indice == 'mon') {
            return $valor;
        }
    }
}
function getYear(){
    $arrayDate = getdate();
    foreach ($arrayDate as $indice => $valor) {
        if ($indice == 'year') {
            return $valor;
        }
    }
}
/**
 * Devuelve la fecha en cadena de texto
 */
function fechaStringTo(){
    return 'Hoy es: '.getDia()." de ".getMesText()." del año ".getYear();
}
/**
 * Devuelve la fecha entre dia/mes/year
 */
function fechaToStringC(){
    return getDia()."/".getMes()."/".getYear();
}
/**
 * Segun el mes que sea, lo traduce al espanol
 */
function mesText($mes){
    switch ($mes) {
        case 'January':
            return "Enero";
        case 'February':
            return "Febrero";
        case 'March':
            return "Marzo";
        case 'April':
            return "Abril";
        case 'May':
            return "Mayo";
        case 'June':
            return "Junio";
        case 'July':
            return "Julio";
        case 'August':
            return "Agosto";
        case 'September':
            return "Septiembre";
        case 'October':
            return "Octubre";
        case 'November':
            return "Noviembre";
        case 'December':
            return "Diciembre";
        default:
            return "Error mesText";
            break;
    }
}
/**
 * Traduce la el dia de la semana a espanol
 */
function diaText($week){
    switch ($week) {
        case 'Monday':
            return "Lunes";
        case 'Tuesday':
            return "Martes";
        case 'Wednesday':
            return "Miercoles";
        case 'Thursday':
            return "Jueves";
        case 'Friday':
            return "Viernes";
        case 'Saturday':
            return "Sabado";
        case 'Sunday':
            return "Domingo";   
        default:
            return "Error Diatext";
    }
}