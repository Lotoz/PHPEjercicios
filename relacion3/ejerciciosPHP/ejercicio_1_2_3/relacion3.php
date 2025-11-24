<?php
    #Dice si es primo o no
     function isPrimo($number)
            {
                for ($i = 2; $i < $number; $i++) {
                    if ($number % $i == 0) {
                        return true;
                    }
                }
                return false;
            }
    #Factorial de un numero
    function factorial($numero)
        {
            if ($numero == 1) {
                return 1;
            } else {
                return $numero * factorial($numero - 1);
                //El sumatorio es lo mismo pero con suma
                // return $n + $suma($n - 1)
            }
        }

    #MCD
    function MCD($numero, $numero2){
            //Siempre se encuentra un if preguntando el caso base
            if ($numero == $numero2) {
                return $numero;
            } else {
                if ($numero > $numero2) {
                    return MCD($numero-$numero2, $numero2);
                } else{
                    return MCD($numero, $numero2-$numero);
                }
            }
        }
    #Euclides
    //Hay que revisarlo, no esta dando calculos bien
     function euclides($dividiendo, $divisor){
            //Siempre se encuentra un if preguntando el caso base
            if ($dividiendo < $divisor) {
                return 0;
            } else{
                return euclides($dividiendo-$divisor,$divisor);
            }
        }
?>