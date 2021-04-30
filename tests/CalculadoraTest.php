<?php

use Prophecy\Call\Call;
use SebastianBergmann\Complexity\Calculator;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertTrue;

require("../../src/Calculadora.php");

class CalculadoraTest extends \PHPUnit\Framework\TestCase {
    
    public function testSuma(){
        //Arrange (Alistar)
        $operacion = new Calculadora(5, 3);
        $esperado = 8;
        //Act (Actuar)
        $calculado = $operacion->suma();
        //Assert (Afirmar)
        assertEquals($esperado, $calculado);
    }

    public function testResta(){
        //Arrange (Alistar)
        $operacion = new Calculadora(5, 3);
        $esperado = 2;
        //Act (Actuar)
        $calculado = $operacion->resta();
        //Assert (Afirmar)
        assertEquals($esperado, $calculado);
    }

    public function testMultiplicacion(){
        //Arrange (Alistar)
        $operacion = new Calculadora(5, 3);
        $esperado = 15;
        //Act (Actuar)
        $calculado = $operacion->multiplicacion();
        //Assert (Afirmar)
        assertEquals($esperado, $calculado);
    }

    public function testDivision(){
        //Arrange (Alistar)
        $operacion = new Calculadora(5, 5);
        $esperado = 0;
        //Act (Actuar)
        $calculado = $operacion->division();
        //Assert (Afirmar)
        assertEquals($esperado, $calculado);
    }
}