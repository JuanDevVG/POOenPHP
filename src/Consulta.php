<?php 

require("Conexion.php");

class Consulta extends Conexion{
    public $consulta;

    function __construct($consulta){
        parent::__construct();
        $this->consulta = $consulta;
    }

    function getConsulta(){
        $resultado = mysqli_query($this->conectar, $this->consulta);
        $datosConsulta = $resultado->fetch_all(MYSQLI_ASSOC);
        
        return $datosConsulta;
    }
}
