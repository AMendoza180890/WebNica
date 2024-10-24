<?php
include_once 'ConexionBD.php';
class CatServicioGralM extends ConexionBD{
    // ver servicios en el gestor de contenido.
    public static function verServiciosM(){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("SELECT id, CatServIcono, CatServTitulo, CatServDescripcion FROM catservicios");
            $pdo -> execute();
            return $pdo ->fetchAll();
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }
    public static function CrearServicioGralM($datosC){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("INSERT INTO catservicios (CatServIcono, CatServTitulo, CatServDescripcion) VALUES (:CatServIcono, :CatServTitulo, :CatServDescripcion)");
            $pdo    ->  bindParam(":CatServIcono",      $datosC["iconServ"],           PDO::PARAM_STR);
            $pdo    ->  bindParam(":CatServTitulo",     $datosC["titleServ"],          PDO::PARAM_STR);
            $pdo    ->  bindParam(":CatServDescripcion", $datosC["descServ"],   PDO::PARAM_STR);
            
            if ($pdo    ->  execute()) {
                return true;
            }else{
                return false;
            }
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }
    // cargar valores del servicio de la base de Datos
    public static function CargarServicioM($valor){
        try {
            if ($valor !== Null && !empty($valor)) {
                $cn = new ConexionBD;
                //$sql = str_replace("?", $valor, "SELECT id, CatServIcono, CatServTitulo, CatServDescripcion FROM catservicios WHERE id = ?");
                //echo '<script>console.log('.$sql.');</script>';
                $pdo = $cn->cBD()->prepare("SELECT id, CatServIcono, CatServTitulo, CatServDescripcion FROM catservicios WHERE id = :id");
                $pdo -> bindParam(":id", $valor, PDO::PARAM_INT);
                $pdo->execute();
                return $pdo->fetch();

            }else {
                $cn = new ConexionBD;
                $pdo = $cn->cBD()->prepare("SELECT id, CatServIcono, CatServTitulo, CatServDescripcion FROM catservicios");
                $pdo->execute();
                return $pdo->fetchAll();

            }

        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }

    public static function ActualizarCatServicioM($datosC){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("UPDATE catservicios SET CatServIcono = :CatServIcono, CatServTitulo = :CatServTitulo, CatServDescripcion = :CatServDescripcion  
            WHERE id = :id");
            $pdo->bindParam(":id",$datosC["id"], PDO::PARAM_INT);
            $pdo->bindParam(":CatServIcono",$datosC["iconoNew"], PDO::PARAM_STR);
            $pdo->bindParam(":CatServTitulo",$datosC["tituloNew"], PDO::PARAM_STR);
            $pdo->bindParam(":CatServDescripcion",$datosC["descripcionNew"], PDO::PARAM_STR);
            if($pdo->execute()){
                return true;
            }else {
                return false;
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    public static function CatServiciosBorrarM($datosC){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("DELETE FROM catservicios WHERE id = :id");
            $pdo->bindParam(":id", $datosC, PDO::PARAM_INT);
            if ($pdo->execute()) {
                return true;
            }else {
                return false;
            }
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>