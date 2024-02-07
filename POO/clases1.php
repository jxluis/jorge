<?php

/*
marca1 = "toyota ";
modelo1 = "hilux";
color1 = "plomo";
año1 = "2022";
placa1= "bmb-808";

marca2 = "kia ";
modelo2 = "soult";
color2 = "blanco";
año2 = "2020";
placa2 = "xbw-745";

marca3 = "toyota ";
modelo3 = "yaris";
color3 = "azul";
año3 = "2022";
placa3 = "bmb-405";
*/



Class Automovil{
    public $modelo;
    public $color;
    public $marca;
    public $año;
    public $placa;

}

$auto1 = new Automovil;
$auto2 = new Automovil;
$auto3 = new Automovil;



$auto1->marca = "toyota";
$$auto1->modelo = "hilux";
$auto1->color = "plomo";
$auto1->año = "2022";
$auto1->placa= "bmb-808";

$auto2->marca= "kia ";
$auto2->modelo = "soult";
$auto2->color = "blanco";
$auto2->año = "2020";
$auto2->placa = "xbw-745";

$auto3->marca = "toyota ";
$auto3->modelo = "yaris";
$auto3->color = "azul";
$auto3->año = "2022";
$auto3->placa = "bmb-405";


echo $auto1->marca."es ".$auto1->marca."hilux";


?>