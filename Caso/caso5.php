<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario de Empleados</title>
    <link rel="stylesheet" href="/estilo.css">
</head>

<body>
    <header>
        <h3>VENTA DE PRODUCTOS ELECTRODOMESTICOS</h3>
        <img src="../imagen/PRODUCTOS.jpg" width="600" height="300">
    </header>
    <section>
        <form action="caso5.php" method="post">
            <?php
            error_reporting(0);
            $Ciente = $_POST['txtCliente'];
            $Producto = $_POST['selProducto'];
            $cantidad = $_POST['txtCantidad'];

            $selCocina ='';
            $selRefrigeradora ='';
            $selTelevision ='';
            $selLavadora ='';
            $selRadiograbadora = '';

          switch ($Producto) {
            case 'Cocina':
                $precio = 1200;
                $subtotal = $precio * $cantidad;
                if ($subtotal> 10000) {
                    $descuento = 0.1;
                }else {
                    $descuento =0.05;
                }
                $mondescuento = $subtotal*$descuento;
                $montoApagar = $subtotal-$mondescuento;
                break;
            
            default:
                # code...
                break;
          }



            if ($Producto == 'Cocina') {
                $selCocina = 'SELECTED';
            } else {
                $selcocina = "";
            }
            if ($Producto == 'Refrigeradora') {
                $selRefrigeradora = 'SELECTED';
            } else {
                $selRefrigeradora = "";
            }
            if ($Producto == 'Television') {
                $selTelevision = 'SELECTED';
            } else {
                $selTelevision = "";
            }
            if ($Producto == 'Lavadora') {
                $selLavadora = 'SELECTED';
            } else {
                $selLavadora = "";
            }
            if ($Producto == 'Radiograbadora') {
                $selRadiograbadora = 'SELECTED';
            } else {
                $selRadiograbadora = "";
            } 

            ?>
            <table border="0" cellpadding="0" cellspacing="0">
            
            <tr> 
                    <td width="150">Cliente: </td>
                    <td>
                        <input type="text" name="txtCliente" size="60" value="<?php echo $empleado;?>">
                    </td>
            </tr> 
            </tr>
                    <td>Producto: </td>
                    <td>
                        <select name="selProducto">
                            <option value="Cocina" <?php echo $selCocina ?>> Cocina</option>
                            <option value="Refrigeradora" <?php echo $selRefrigeradora ?>> Refrigeradora</option>
                            <option value="Television" <?php echo $selTelevision ?>> Television</option>
                            <option value="Lavadora" <?php echo $selLavadora ?>> Lavadora</option>
                            <option value="Radiograbadora" <?php echo $selRadiograbadora ?>> Radiograbadora</option>
                        </select>
                    </td>
            </tr>
            <tr> 
                    <td width="100">Cantidad: </td>
                    <td>
                        <input type="text" name="txtCantidad" size="30" value="<?php echo $empleado;?>">
                    </td>
            </tr> 
            <td></td>       <td><input type="submit" value="Procesar" name="btnProcesar"></td>
            </tr>
                <?php
                if ($_SERVER ["REQUEST_METHOD"] == "POST") {
                    echo"<h2>Resultados:</h2>";
                    echo "precio del producto: $precio<br>";
                    echo "subtotal a pagar: $subtotal<br>";
                    echo "monto de descuento: $mondescuento<br>";
                    echo "monto a pagar: $montoApagar";
                }
                ?>

                   