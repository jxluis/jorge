<?php
//creacion de la clase Gato
class GatoSimple{
    //Atributo
    public $color;
    public $raza;
    public $sexo;
    public $edad;
    public $peso;

    //Meodos
    public function  maulla() {
        echo"Miauuuu";

}
public function ronronea() {
    echo "<br>Grrrrrrrr";
}

//un metodo con peros el gato solo come pescado
 
public function come($comida) {
    if ($comida=="pescado") {
        echo "<br>Hmmmmm, miau miau";
    } else {
        echo "<br>Lo siento, yo solo como pescado";
    }
}

//poner a pelear a dos gatos, solo se van a pelear dos gatos

public function peleaCon(GatoSimple$rival) {
    if ($rival->sexo== "hembra") {
        echo "<br>no peleo con gatitas";
    } else {
    echo "<br>ven aqui te voy a desmadrear";

        }
    }
}

$silvestre= new GatoSimple;
$tom = new GatoSimple;
$alejandra = new GatoSimple;


echo"Hola gatito";
$silvestre->ronronea();
echo "<br>toma tus croquetas";
$silvestre->come("croquetas");
echo "<br>mejor te doy pescado";
$silvestre->come("pescado");

echo "<br>veo otro gato";
$tom ->sexo = "macho";

$silvestre ->peleaCon($tom);
$alejandra->sexo = "hembra";
$silvestre->peleaCon($alejandra);

?>