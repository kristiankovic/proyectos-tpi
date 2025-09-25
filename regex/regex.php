<?php

$cadena = "llegare pronto que voy andando";

// (opcion | opcion) -> indica que puede ser una u otra opcion
// "/()/" --> indica un subpatron dentro de la cadena
// i -> indica que no importa si es mayuscula o minuscula

$expresion = "/Llegare pronto que voy (vol|and)ando/i";

//$matches -> array donde se guardan los resultados de la busqueda
if (preg_match($expresion, $cadena, $matches)) {

    echo "La cadena cumple con la expresión regular. ";
} 

else {
    echo "La cadena no cumple con la expresión regular. ";
}

var_dump($matches);

?>