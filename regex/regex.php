<?php

$cadena = "llegare pronto que voy andando";

$cadena = "Hoooola";

$expresion = "/ho{3,6}la/i";

// (opcion | opcion) -> indica que puede ser una u otra opcion
// "/()/" --> indica un subpatron dentro de la cadena
// i -> indica que no importa si es mayuscula o minuscula
// "/hol[a-u0-9]/" --> indica que la cadena puede contener cualquier vocal y cualquier numero
// "/hola/i" --> no sensible a las mayusculas y minusculas
// "/^a/" --> la cadena debe empezar con el caracter establecido
// "/a$/" --> la cadena debe terminar con el caracter establecido
// "/hol\w/" --> inserta cualquier valor que sea alfanumerico
// "/hol\W/" --> inserta cualquier valor que no sea alfanumerico
// "/hol./" --> inserta cualquier valor 
// "hol\d/i" --> verifica si el valor es un numero
// "/hol\D/i" --> verifica si el caracter ingresado es cualquiera menos un numero
// "/hola*/" --> existe la posibilidad de que exista ese caracter y si existe puede repetirse una o mas veces
// "/hola+/" --> verifica si existe el caracter especificado
// "/ho?la/" --> indica que el caracter seleccionado es opcional que exista dentro de la cadena
// "/ho{3}la/i" --> establece la cantidad de veces que puede aparecer un caracter
// "/ho{3,7}la/i" --> establece la cantidad de veces que puede aparecer un caracter en el rango establecido

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