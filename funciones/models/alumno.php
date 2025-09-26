<?php

require_once("persona.php");

class Alumno extends Persona{
    public $due;
    public $carrera;
    public $materias = [];

    public function mostrarData(){
        echo "NOMBRE: $this->nombre <br>
        ANHIO DE NACIMIENTO: $this->anhioNacimiento <br>
        CARRERA: $this->carrera";
    }
}
?>