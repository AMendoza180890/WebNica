<?php
include_once 'ConexionBD.php';
class mensajesM extends ConexionBD{
    public static function cargar_lista_mensajesM(){
        try {
            $cn = new ConexionBD;
            $pdo = $cn -> cBD()->prepare("SELECT catclicontid,catclicontName,catclicontEmail,catclicontEmail,catclicontAdress,catclicontMessage FROM catclientcontacto");
            $pdo -> execute();
                return $pdo->fetchAll();
        } catch (exception $ex) {
            mensajes::error($ex);
        }
        
    }
}
?>