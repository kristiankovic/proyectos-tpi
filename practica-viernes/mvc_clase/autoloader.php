<?php

spl_autoload_register(function ($clase): void {
    $ruta = "../" . str_replace("\\", "/", $clase) . ".php";

    if (file_exists($ruta)) {

        require_once $ruta;
    } else {
        die("No se encontró la clase $clase en la ruta $ruta");
    }
});
?>