<?php
class ConexionBD{
            private $host;
            private $db;
            private $user;
            private $passw;

    public function __construct()
    {
        $this->host     =   $_SERVER['SERVER_NAME'];
        $this->db       =   "_dbwebnica";
        $this->user     =   "userWebNi";
        $this->passw    =   "Soloyo246$$";
    }
            
    public  function cBD(){
        try{
            $conexion = "mysql:host=". $this->host.";dbname=". $this->db;

            $bd = new PDO($conexion, $this->user, $this->passw);
            
            return $bd;    
        }
        catch (PDOException $ex){
            echo "Error en la conexion: ". $ex;
        }    
    }
}
?>