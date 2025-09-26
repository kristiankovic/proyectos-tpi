<?php


use lib\Route;
use App\Controllers\HomeController;


Route::get("/", function(){
    echo "RUTA RAIZ";
});


Route::get("/inicio", function(){
    echo "Inicio";
});


Route::dispatch();

Route::get("/Home", [HomeController::class,"index"]);

Route::get("/inicio/:flag", function($flag){
    return  array('nombre'=>"cristian");
});

?>
