<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - HTML5</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<h2>Formulario de Paternidad</h2>

<?php
$nombre = $sexo = $num_hijos = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $sexo = $_POST["sexo"];
    $num_hijos = $_POST["num_hijos"];

    $frase = "El señor(a) $nombre ";

    if ($num_hijos == 0) {
        $frase .= "no tiene hijos.";
    } else {
        $frase .= ($sexo === 'hombre') ? "tiene $num_hijos hijo(s)." : "tiene $num_hijos hija(s).";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required value="<?= $nombre ?>">

    <br>

    <label for="sexo">Sexo:</label>
    <select name="sexo" required>
        <option value="hombre" <?= ($sexo === 'hombre') ? 'selected' : '' ?>>Hombre</option>
        <option value="mujer" <?= ($sexo === 'mujer') ? 'selected' : '' ?>>Mujer</option>
    </select>

    <br>

    <label for="num_hijos">Número de hijos:</label>
    <input type="number" name="num_hijos" min="0" required value="<?= $num_hijos ?>">

    <br>

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($frase)) {
    echo "<p>$frase</p>";
}
?>

</body>
</html>