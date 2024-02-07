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
        <h3>FUNCIONES DE CADENA</h3>
    </header>
    <?php
$cadena = "Mirkosaurio";
$longitud = strlen($cadena);

echo "La longitud de la cadena es $longitud";

?>        

<br>

   <?php
$mystring = 'abc';
$findme   = 'c';
$pos = strpos($mystring, $findme );

// El operador !== también puede ser usado. Puesto que != no funcionará como se espera
// porque la posición de 'a' es 0. La declaración (0 != false) se evalúa a 
// false.
if ($pos !== false) {
     echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
         echo " y existe en la posición $pos";
} else {
     echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
}
?>
<br>
<?php
$str1 = "men li cabroo";
$str2 = "Hola";

$resultado = strcmp($str1, $str2);

if ($resultado == 0) {
    echo "Las cadenas son iguales";
} elseif ($resultado < 0) {
    echo "$str1 es menor que $str2";
} else {
    echo "$str1 es mayor que $str2";
}
?>
<br>
<?php
$email  = 'osocarachoso@gmail.com';
$domain = strstr($email, '@');
echo $domain; //osocarachoso@gmail.com

$user = strstr($email, '@', true); // Desde PHP 5.3.0
echo $user; // mostrará name
?>

   <section>





<form action="caso6.php" method="get">
</header>