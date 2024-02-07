<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - HTML5</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
       
    <header>
        <h3>VENTA DE PRODUCTO</h3>
    </header>
    <section>

    <form action="caso1.php" method="get">
        <table border="0" cellspacing = "0" cellpading = "0" aling="center">;
            <tr>
                <td>Cantidad</td>
                <td>
                    <input type="text" name="cantidad">
                </td>

            </tr>
            <tr>
                <td>
                    <input type="submit" value="Procesar">
                </td>
                <td>
                    <input type="reset" value="Limpiar">
                </td>
            </tr>
        
            <tr>
                <?php
                error_reporting(0);
                $Producto = $_GET['txtProducto'];
                $cantidad = $_GET['txtCantidad'];
                $Compra = $_GET['txtCompra'];
                $Descuento = $_GET['txtDescuento'];
                $Neto = $_GET['txtNeto'];
                ?>
            </tr>
                <td>precio de producto</td>
                <td>
                    <?php
                    printf("%.2f",  $Producto);
                    ?>
                </td>
            </tr>
            <tr>
                <td>cantidad</td>
                <td>
                    <?php
                    printf("%.2f",  $cantidad);
                    ?>
                </td>
            </tr>


            <tr>
                <td>importe de compra</td>
                <td>
                    <?php
                    printf("%.2f",  $Compra);
                    ?>
                </td>
            </tr>
            <tr>
                <td>importe de descuento</td>
                <td>
                    <?php
                    printf("%.2f",  $Descuento);
                    ?>
                </td>
            </tr>
            <tr>
                <td>importe neto</td>
                <td>
                    <?php
                    printf("%.2f",  $Neto);
                    ?>
                </td>
            </tr>


    </section>
    <footer>
