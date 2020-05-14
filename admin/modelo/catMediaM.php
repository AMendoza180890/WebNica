<?php
include_once 'ConexionBD.php';
class clsCatMediaM extends ConexionBD{
    
    public static function cargarCatMedia(){
        return clsCatMediaM::conexionCargarMedia();
    }

    public static function ingresarNuevoCatMediaM($datos){
        return clsCatMediaM::conexionInsertarCatMediaM($datos);
    }

    public static function eliminarCatMediaC($idDel){
        return clsCatMediaM::conexionEliminarCatMediaM($idDel);
    }


    private static function conexionCargarMedia(){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("SELECT id, catMediaDescripcion, catMediaImg, catMediaImgPublic FROM catmedia");
            $pdo -> execute();
            return $pdo->fetchAll();
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
    private static function conexionInsertarCatMediaM($datos){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("INSERT INTO catmedia (catMediaDescripcion, catMediaImg, catMediaImgPublic) VALUES (:catMediaDescripcion, :catMediaImg, :catMediaImgPublic)");
            $pdo    ->  bindParam(":catMediaDescripcion",   $datos["catMediaDescripcion"],  PDO::PARAM_STR);
            $pdo    ->  bindParam(":catMediaImg",           $datos["catMediaImg"],          PDO::PARAM_STR);
            $pdo    ->  bindParam(":catMediaImgPublic",     $datos["catMediaImgPublic"],    PDO::PARAM_STR);
            if ($pdo -> execute()) {
                return true;
            } else {
                return false;
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    private static function conexionEliminarCatMediaM($idDel){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("DELETE FROM catmedia WHERE id = :id");
            $pdo -> bindParam(":id",$idDel,PDO::PARAM_INT);
            if ($pdo -> execute()) {
                return true;
            }else {
                return false;
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>