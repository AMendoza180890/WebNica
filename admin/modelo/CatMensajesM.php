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

    public static function eliminar_mensaje($idBorrar){
            try {
                $cn = new ConexionBD;
                $pdo = $cn->cBD()->prepare("DELETE FROM catclientcontacto WHERE catclicontid = :id");
                $pdo -> bindParam(":id",$idBorrar,PDO::PARAM_INT);
                if($pdo ->execute()){
                    return true;
                }else{
                    return false;
                }
            } catch (Exception $ex) {
                mensajes::error($ex);
            }
    }
}
?>