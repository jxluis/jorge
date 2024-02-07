<?php
class Carro{

    public $color;
    public $potencia;
    public $kilometraje;
    public $combustible;
    public $modelo;
    public $marca;
    public $velocidad = 0;

    public function acelerando() {
        echo"acelerando";
    }

    public function desacelerado() {
        echo "parado";
    }
    public function acelerarr() {
    $this->velocidad = $this->velocidad + 1;
    }
    public function Acelerar( $incremento ) {
        $this->velocidad += $incremento;
    }

}

       

$Micarro = new Carro();

$Micarro->acelerarr();

$Micarro->marca = "TOYOTA";
echo $Micarro->marca . "<br>";

$Micarro->color = "rojo";
echo $Micarro->color . "<br>";

$Micarro->potencia = "100HP";
echo $Micarro->potencia . "<br>";

$Micarro->modelo = "hilux";
echo $Micarro->modelo . "<br>";

$Micarro->combustible = "petroleo";
echo $Micarro->combustible . "<br>";

$Micarro->kilometraje = "40500km";
echo $Micarro->kilometraje . "<br>";
       
?>