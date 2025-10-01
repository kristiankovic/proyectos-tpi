<?php

namespace app\controllers;

class HomeController{

    public function index() {

        $datos = ["nombre" => "Cristian"];  
        return $this->view('HomeView');
    }

    public function recibirDatos(){

    }

    public function datosPost(){
        
    }

    public function view($vista, $data = []){

        extract($data);

        if(file_exists("../app/views/$vista.php")){
            
            ob_start();

            include "../app/views/$vista.php";
            $content = ob_get_clean();
            return $content;
        }

        else echo "vista no encotrada ../app/views/$vista.php";

        return "hola desde la pagina Home";
    }
}
