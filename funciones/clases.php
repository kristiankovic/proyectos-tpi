<?php
//Llamar funciones desde otro archivos
require_once("models/persona.php");
require_once("models/alumno.php");

//Creacion del objeto
$juan = new Persona("12345678-9");
$juan->nombre = "Juan Perez";

$anhioNacimiento = 2002;

//:: llama a metodos/variables estaticas
echo "Persona <br>";
$juan -> mostrarData();
echo "Su edad es " . Persona::calcularEdad($anhioNacimiento) . " años <br>";

//Hererencia



$a1 = new Alumno("98765432-1", 2000);
$a1->nombre = "Ana Lopez";
$a1->due = "vv23011";
$a1->carrera = "Ingenieria en Sistemas";
$a1->materias = ["Programacion I", "Matematicas Discretas", "Calculo I"];

echo "<br> Alumno heredado con la clase de Persona <br>";
$a1->mostrarData();
?>