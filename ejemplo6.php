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
        <h3>manejo de constantes</h3>
    </header>
    <section>
        <?php
        define("PI","3.1416");
        define("IGV","0.18");


        $radio = 12;
        $valorventa = 250.50;

        $area = PI * $radio * $radio;
        $impuesto = $valorventa * IGV;

        echo"<br>el area del circulo con radio $radio es $area";
        echo "<br>el impuesto a la venta de  $valorventa es $impuesto";
        ?>
