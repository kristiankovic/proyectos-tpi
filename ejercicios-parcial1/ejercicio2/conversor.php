<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Conversor de temperatura</title>
</head>

<body>

    <div class="container">
        
        <form action="" method="post">

            <label for="temperatura">Ingrese la temperatura:</label>
            <input type="text" name="temperatura" id="tempertura" required><br>

            <label for="tipo_temp">Tipo de medición:</label>
            <input type="radio" name="tipo" id="tipo" value="celsius" required step="0.01">Celsius
            <input type="radio" name="tipo" id="tipo" value="farenheit" required step="0.01">Farenheit <br>

            <button type="submit">Convertir</button> <br>

            <?php

            if (isset($_POST["temperatura"]) && isset($_POST["tipo"])) {

                $temperatura = $_POST["temperatura"];
                $tipo = $_POST["tipo"];


                if (preg_match("/^-?\d+(\.\d+)?$/", $_POST["temperatura"])) {

                    if ($tipo === "celsius") {

                        $resultado = ($temperatura * 9 / 5) + 32;
                        echo "<br> <h2>$temperatura °C son " .  round($resultado, 4) . " °F</h2>";
                    } 
                    
                    elseif ($tipo == "farenheit") {

                        $resultado = ($temperatura - 32) * 5 / 9;
                        echo "<br> <h2>$temperatura °F son " . round($resultado, 4) . " °C</h2>";
                    } 
                    
                    else {
                        echo "<script>alert('Por favor seleccione una medicion de temperatura');</script>";
                    }
                }
            } 
            
            else {

                echo "<script>alert('Por favor ingrese un formato de temperatura válido');</script>";
            } ?>
        </form>
    </div>
</body>

</html>