<?php
//Debe llevar el mismo nombre el archivo y la clase

class Persona{
    //Proceso de seleccionar caracterisiticas y asignarlas -- Abstraccion

    //Atributos o propiedades generales
    public $nombre;

    //Private -- Solo se puede visualizar de las clases que la hereden
    private $dui ;

    //Protected -- Solo se puede visualizar dentro de la clase
    protected $anhioNacimiento;

    //Comportamiento de la clase
    public function __construct($dui, $anhioNacimiento = null){

        //Se debe asignar con el this
        $this -> dui = $dui;
        $this -> anhioNacimiento = $anhioNacimiento;
    }

    public function mostrarData(){
        echo "NOMBRE: $this->nombre <br> 
        DUI: $this->dui <br> 
        AÑO NACIMIENTO: $this->anhioNacimiento <br>";
    }

    public static function calcularEdad($anhioNacimiento): int{
        return date("Y") - $anhioNacimiento;
    }
}

?>