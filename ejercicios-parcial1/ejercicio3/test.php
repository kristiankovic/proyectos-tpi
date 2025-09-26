<?php
$subtotal = 0;

$compras = [
    ["Manzanas", 4, 1.25],
    ["Pan", 2, 1.50],
    ["Leche", 1, 0.99],
    ["Huevos", 12, 2.75],
    ["Arroz", 1, 1.80],
    ["Detergente", 1, 3.50],
    ["Pasta dental", 2, 2.20],
    ["Shampoo", 1, 4.75],
    ["Jabón líquido", 2, 3.10],
    ["Papel higiénico", 6, 5.60],
    ["Cereal", 1, 3.90],
    ["Aceite vegetal", 1, 2.95],
    ["Café molido", 1, 4.20],
    ["Azúcar", 1, 1.60],
    ["Sal", 1, 0.85]
];

if(isset($_POST["nombre"], $_POST["cantidad"], $_POST["precio"]) && !empty($_POST["nombre"]) && 
    filter_var($_POST["cantidad"], FILTER_VALIDATE_INT) !== false && 
    filter_var($_POST["precio"], FILTER_VALIDATE_FLOAT) !== false){

    $compras[count($compras) - 1] = [$_POST["nombre"], $_POST["cantidad"], $_POST["precio"]];

    echo "<script> alert('Se agrego el producto') </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 3</title>
</head>

<body>

    <div class="container">

        <div class="box1">

            <h2>INGRESAR OTRO PRODUCTO</h2>

            <form action="" method="post">

                <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre del producto" required>

                <input type="number" name="cantidad" id="cantidad" placeholder="Ingrese la cantidad" step="1" required>

                <input type="number" name="precio" id="precio" placeholder="Ingrese el precio" step="0.01" required>

                <button type="submit">Agregar</button>

            </form>

        </div>

        <div class="box2">

            <table>
                <caption>Carrito de compras</caption>

                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($compras as $producto) : ?>

                        <tr>
                            <td><?= $producto[0] ?></td>
                            <td><?= $producto[1] ?></td>
                            <td><?= "$" . $producto[2] ?></td>

                            <?php if ($producto[1] >= 5) {

                                $descuento = ($producto[2] * $producto[1]) * 0.05;
                                $total = $producto[2] * $producto[1] - $descuento;

                                $precio_iva = $total + ($producto[2] * $producto[1] * 0.13);

                                $subtotal += $precio_iva;

                                echo "<td> \$" . round($precio_iva, 2) . " - 5% desc.</td>";
                            } 
                            
                            else {
                                $precio_iva = ($producto[2] * $producto[1]) + ($producto[2] * $producto[1] * 0.13);
                                $subtotal += $precio_iva;

                                echo "<td> \$" . round($precio_iva, 2) . "</td>";
                            }
                            ?>
                        </tr>

                    <?php endforeach; ?>

                </tbody>

                <tfoot>


                    <tr>
                        <td colspan="3">Subtotal + IVA 13%</td>
                        <td><?= "$" . round($subtotal, 2); ?></td>
                    </tr>
                </tfoot>

            </table>
        </div>

    </div>

</body>

</html>