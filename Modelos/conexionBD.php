<?php
class ConexionBD{
            private $host;
            private $db;
            private $user;
            private $passw;

    public function __construct()
    {
        $this->host     =   $_SERVER['SERVER_NAME'];
        //$this->host     =   'mysql1007.mochahost.com';
        $this->db       =   "dbwebnica";
        $this->user     =   "root";
        $this->passw    =   "";
    }
            
    public  function cBD(){
        try{
            $conexion = "mysql:host=".$this->host.";dbname=".$this->db;

            $bd = new PDO($conexion, $this->user, $this->passw);
            
            return $bd;    
        }
        catch (PDOException $ex){   
            mensajes::error($ex);
        }    
    }
}
?>