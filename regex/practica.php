<?php

$url = "https://www.youtube.com/watch?v=xGaXH7spCyA";
//$url = "https://www.youtube.com/watch?v=2a8PgqWrc_4&list=RD2a8PgqWrc_4&start_radio=1";
//$url = "youtu.be/xGaXH7spCyA?si=eQh8ui9DkEH2Iki_";

// se usan %% para delimitar la expresion regular en vez de //

$patron = "%^(https://)?(www\.)?(youtu\.be|youtube)(\.com)?/(watch\?v=)?(\w{10,11})%";

if (preg_match($patron, $url, $matches)) {

    var_dump($matches);
} 

else {
    echo "No cumple con el patron";
}

?>