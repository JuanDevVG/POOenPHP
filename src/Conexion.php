<?php 

class Conexion {
    private $dbname = "db_carritosGolf";
    private $user = "root";
    private $server = "localhost";
    private $dbpassword = "";
    protected $conectar;

    function __construct(){
        $this->conectar = mysqli_connect($this->server, $this->user, $this->dbpassword, $this->dbname);

        if ($this->conectar->connect_errno){
            echo "Fallo al intentar concectar con la base de datos";
            return;
        } 
    }
}



