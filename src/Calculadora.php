<?php

use Prophecy\Call\Call;
use SebastianBergmann\Complexity\Calculator;

class Calculadora {
    private $numero1;
    private $numero2;

    function __construct($numero1, $numero2){
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    function suma(){
        return $this->numero1 + $this->numero2;
    }

    function resta(){
        return $this->numero1 - $this->numero2;
    }

    function multiplicacion(){
        return $this->numero1 * $this->numero2;
    }

    function division(){
        if ($this->numero2 == 0){
            echo "No se puede dividir entre cero <br>";
        } else {
            return $this->numero1 / $this->numero2;
        }
    }
}
