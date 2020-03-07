<?php
class ConBD{
            private $host;
            private $db;
            private $user;
            private $passw;

    public function __construct()
    {
        
        $this->host     =   getenv("DDBB_HOST");
        $this->db       =   getenv("DDBB_BD");
        $this->user     =   getenv("DDBB_USER");
        $this->passw    =   getenv("DDBB_PASSWORD");
        /*
        $this->host     =   'mysql1007.mochahost.com';
        $this->db       =   "marvin_dbwebnica";
        $this->user     =   "marvin_userWebNi";
        $this->passw    =   "Soloyo246$$";
        */
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