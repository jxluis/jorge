<?php
//Estructuras condicionales
// Operadores relaciones/comparacion
/**
 * > mayor que
 * < menor que
 * >= mayor igual que
 * <= menor igual que
 * == igualdad => 4 == 4 / 4 == '4'
 * === identico => 4 === 4 / '4' === '4'
 * != diferente
 */
//Logica Booleana
/**
 * Y logico
 * v v => v
 * v f => f
 * f v => f
 * f f => f
 * 
 * O logico
 * v v => v
 * v f => v
 * f v => v
 * f f => f
 * 
 * Negacion
 *  v => f
 *  f => v
 */
$a = 15;
$b = 5;
$c = 20;

echo $a > $b && $a < $c;
echo $a > $b || $a < $c;

/* 
    if (condicion) // if simple
        accion;
    
    if (condicion) // if doble
        acciones verdadera;
    else
        acciones falsa;

    if (condicion1) // if doblemente enlazada
        acciones verdadera1
    Elseif (condicion2)
        acciones verdadera2
    Elseif (condicion3)
        acciones verdadera3
    Else
        acciones falsa1
    */

// Categorias operario, administrativo, jefe
$categoria = 'jefe';

if ($categoria == 'operario') {
    echo "<br>Costo x hora 10";
} elseif ($categoria == 'administrativo') {
    echo "<br>Costo x hora 15";
} elseif ($categoria == 'jefe') {
    echo "<br>Costo x hora 25";
}
/**
 * Estrcutura Switch
 * switch($variable a evaluar){
 * case valor1: 
 *      accion valor1;
 *      break;
 * case valor2: 
 *      accion valor2;
 *      break;
 * case valorN: 
 *      accion valorN;
 *      break;
 * default: accion_falso;
 * }
 */

 $categoria = 'administrativo';

 switch ($categoria) {
    case 'operario':
        echo "<br>Costo x hora 10";
        break;
    case 'administrativo':
        echo "<br>Costo x hora 15";
        break;
    case 'jefe':
        echo "<br>Costo x hora 25";
        break;
    default:
        echo "<br>Costo x hora 0";
        break;
 }