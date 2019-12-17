<?php
class ConexionBD{
    private $host;
    private $db;
    private $user;
    private $passw;
    private $charset;

    public function _construct(){
        $this->host =   $_SERVER;
        $this->db =   'dbwebnica';
        $this->user =   'root';
        $this->passw =   '';
        /*$this->charset =   'localhost';*/
    }

    static public function cBD(){
        try{
            $bd = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->passw);

            return $bd;    
        }
        catch (PDOException $ex){
            echo "Error en la conexion".$ex->getMessage();
        }    
    }
}
?>