<?php
class ConexionBD{
    static public function cBD(){
        $bd = new PDO("mysql:host=localhost;dbname=dbwebnica","root","");
        return $bd;
    }
}
?>