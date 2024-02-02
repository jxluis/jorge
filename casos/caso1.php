<?php

$resultado = '';
$funcionSeleccionada = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cadena = $_POST["cadena"];
    $funcionSeleccionada = $_POST["funcion"];


    switch ($funcionSeleccionada) {
        case 'substr':
            $resultado = "Subcadena con substr: " . substr($cadena, 1, 3);
            break;
        case 'ltrim':
            $resultado = "ltrim: " . ltrim($cadena);
            break;
        case 'rtrim':
            $resultado = "rtrim: " . rtrim($cadena);
            break;
        case 'chop':
            $resultado = "chop: " . chop($cadena);
            break;
        case 'trim':
            $resultado = "trim: " . trim($cadena);
            break;
        case 'str_replace':
            $resultado = "Reemplazo de 'Mundo' por 'Universo': " . str_replace("Mundo", "Universo", $cadena);
            break;
        case 'strtolower':
            $resultado = "Minúsculas: " . strtolower($cadena);
            break;
        case 'strtoupper':
            $resultado = "Mayúsculas: " . strtoupper($cadena);
            break;
        case 'preg_match':

            if (preg_match('/^[a-zA-Z0-9]+$/', $cadena)) {
                $resultado = "La cadena contiene solo letras y números.";
            } else {
                $resultado = "La cadena no cumple con el formato deseado.";
            }
            break;
        case 'explode':

            $arr_palabras = explode(' ', $cadena);
            $resultado = "Palabras separadas por espacios: " . implode(', ', $arr_palabras);
            break;
        case 'strrev':
            $resultado = "Cadena al revés: " . strrev($cadena);
            break;
        case 'str_repeat':
            $resultado = "Repetir cadena: " . str_repeat($cadena, 3);
            break;
        case 'str_pad':
            $resultado = "Rellenar a la izquierda con ceros: " . str_pad($cadena, 10, '0', STR_PAD_LEFT);
            break;

    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de Cadena</title>
</head>
<body>
    <h2> Funciones de Cadena</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


        <label for="funcion">Seleccione una función:</label>
        <select name="funcion" id="funcion">
            <option value="substr" <?php echo ($funcionSeleccionada == 'substr') ? 'selected' : ''; ?>>substr</option>
            <option value="ltrim" <?php echo ($funcionSeleccionada == 'ltrim') ? 'selected' : ''; ?>>ltrim</option>
            <option value="rtrim" <?php echo ($funcionSeleccionada == 'rtrim') ? 'selected' : ''; ?>>rtrim</option>
            <option value="chop" <?php echo ($funcionSeleccionada == 'chop') ? 'selected' : ''; ?>>chop</option>
            <option value="trim" <?php echo ($funcionSeleccionada == 'trim') ? 'selected' : ''; ?>>trim</option>
            <option value="str_replace" <?php echo ($funcionSeleccionada == 'str_replace') ? 'selected' : ''; ?>>str_replace</option>
            <option value="strtolower" <?php echo ($funcionSeleccionada == 'strtolower') ? 'selected' : ''; ?>>strtolower</option>
            <option value="strtoupper" <?php echo ($funcionSeleccionada == 'strtoupper') ? 'selected' : ''; ?>>strtoupper</option>
            <option value="preg_match" <?php echo ($funcionSeleccionada == 'preg_match') ? 'selected' : ''; ?>>preg_match</option>
            <option value="explode" <?php echo ($funcionSeleccionada == 'explode') ? 'selected' : ''; ?>>explode</option>
            <option value="strrev" <?php echo ($funcionSeleccionada == 'strrev') ? 'selected' : ''; ?>>strrev</option>
            
            </select>
        
        <button type="submit">Realizar Operaciones</button>
    </form>

    <?php if (!empty($resultado)): ?>
        <h3>Resultado:</h3>
        <p><?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
