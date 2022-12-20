<?php 

class Conexion 
{
    public $host = "localhost";
    public $user = "messi";
    public $password = "argentina";
    public $db = "recetas";
    // we are created $connect to use for sql instructions

    public function __construct(){
        $connectionString="mysql:host =".$this->host.";dbname=".$this->db.";charset=utf8";
        try {
            $this->connect = new PDO($connectionString,$this->user,$this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conexion exitosa ju ju ju ";
        } catch (Exception $e){
            $this->connect = 'Error de conexión';
            echo "ERROR: ".$e->getMessage();
        }
    }     
    
    public function connect()
    {
        return $this->connect;
    }

}

?>