<?php
/*
Clases: una plantilla de la cual me basare para crear objetos
Objeto: es un elemento del mundo real
*/
/*
$nombre1 = "juan";
$edad = 25;
$pais = "Peru";

$nombre2 = "mario";
$edad1 = 20;
$pais1 = "Chile";

*/
 Class Persona {
    //Atributos - Propiedades
    public $nombre;

    public $edad;

    public $pais;
    }
$persona1=new Persona; // instanciar
$persona2 =new Persona;

$persona1->$nombre ="juan";
$persona1->edad = 25;
$persona1->pais = "Peru";

$persona2->$nombre ="mario";
$persona2->edad = 20;
$persona2->pais = "Mexico";

echo $persona1->nombre."tiene ".$persona1->edad."años";
echo $persona2->nombre."tiene".$persona2->edad."años";






?>