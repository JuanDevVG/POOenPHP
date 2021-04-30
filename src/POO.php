<?php
    
class Coche {
    //Declarar atributos de clase
    public $marca;
    public $color;
    private $ruedas; //Atributo privado, solo se puede acceder a el desde la misma clase.
    public $espejos;

    //Metodo constructor
    function __construct($marca, $color){
        $this->marca = $marca;
        $this->color = $color;
        $this->ruedas = 4;
        $this->espejos = array("Retrovisores"=>1, "Laterales"=>2); // array asociativo
    }

    //Metodos de la clase
    function arrancar(){
        echo "Estoy arrancando <br>";
    }

    function girar($direccion){
        echo "Estoy girando hacia la ". $direccion . ".<br>";
    }

    function frenar(){
        echo "Estoy frenando <br>";
    }

    function mostrarDatosDeEspejos(){
        //Recorriendo array asociativo
        foreach ($this->espejos as $clave=>$valor){
            echo "El coche tiene $valor espejos $clave <br>";
        }
        //Agregando elemento a array asociativo (clave=valor);
        $this->espejos["Frontales"] = 2;
    }

    //Metodo getter
    function getRuedas(){
        return $this->ruedas;
    }

    //Metodo setter
    function setRuedas($ruedas){
        $this->ruedas = $ruedas;
    }
}

$coche1 = new Coche("Renoult", "Rojo"); //Instanciando la clase Coche / creando objeto a partir de la clase coche

//Usando propiedades y metodos del objeto creado
echo "Soy el auto " . $coche1->marca . " y ";
$coche1->arrancar();
$coche1->girar("derecha");
$coche1->frenar();
echo "Tengo " . $coche1->getRuedas() . " ruedas.<br>";

//Recuperando datos de un array asociativo, en este caso el array espejos (atributo de la clase Coche)
echo "Tengo " . $coche1->espejos["Retrovisores"] . " espejos retrovisores.<br>";
echo "Tengo " . $coche1->espejos["Laterales"] . " espejos laterales.<br>";

if (is_array($coche1->espejos)){ //Verificando si una variable es un array o no, con la función is_array que devuelve true o false
    echo "Espejos es un array.<br>";
} else {
    echo "La variable no es un array.<br>";
}

$coche1->mostrarDatosDeEspejos();
echo "**********-----------------**********<br>";
$coche1->mostrarDatosDeEspejos();
