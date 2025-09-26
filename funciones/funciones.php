<?php

function mensaje(){
    echo "Hola ";
}

//mensaje();

//Se debe declarar el tipo de dato que retorna la funcion
function retornarNombre(): int{
    return 2;
}

//echo retornarNombre();

//Recibir parametros
function saludar($nombre){
    echo "Hola {$nombre} ";
}

saludar("Juan");

//Parametros por defecto
function dobleNumero($numero = null){
    if($numero === null){
        return -1;}

    else{
        return $numero ** 2;
    }
   
}

//echo (dobleNumero(null) === -1) ? "El parametro es nulo" : "Resultado " . dobleNumero(4);

$nombreV = "Pedro";

//Envio de referencias (puntero o direccion de memoria)
function pasoPorRef(&$nombre){
    $nombre = "Ana";
}

echo $nombreV;
?>