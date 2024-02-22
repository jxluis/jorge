<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - HTML5</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<h1>Generador de Tickets</h1>

<?php
class TicketGenerator {
    public static function generarTicket($nombre, $altura, $edad, $sexo, $rechazo) {
       
        if ($rechazo === 'si') {
            return "$nombre, has rechazado llevarnos a juicio por daños y perjuicios.";
        }

        if ($altura > 120 && $edad > 16) {
            $numeroTicket = str_pad(rand(1, 99999), 5, '0');
            $ticket = "$nombre, ticket $numeroTicket";
            return $ticket;
        } else {
            return "Lo siento, $nombre, ♥no cumples con los requisitos para obtener el ticket♥.";
        }
    }
}

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCliente = $_POST["nombre"];
    $edadCliente = (int)$_POST["edad"];
    $alturaCliente = (int)$_POST["altura"];
    
    $sexoCliente = isset($_POST["sexo"]) ? $_POST["sexo"] : "";
    
  
    $rechazo = isset($_POST["rechazo"]) ? $_POST["rechazo"] : '';

    $resultado = TicketGenerator::generarTicket($nombreCliente, $alturaCliente, $edadCliente, $sexoCliente, $rechazo);
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label for="edad">Edad:</label>
    <input type="numero" name="edad" required><br>

    <label for="altura">Altura (en cm):</label>
    <input type="numero" name="altura" required><br>

    <label for="sexo">Sexo:</label>
    <select name="sexo" required>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
    </select><br>

    
    <label for="rechazo">¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label>
    <select name="rechazo" required>
        <option value="si">Sí</option>
        <option value="no">No</option>
    </select>
    <br>

    <button type="submit">Generar Ticket</button>
</form>

<?php

if (strpos($resultado, 'Lo siento') !== false) {
    echo "<p style='color: red;'>$resultado</p>";
} else {
    echo "<p style='color: green;'>$resultado</p>";
}
?>

</body>
</html>