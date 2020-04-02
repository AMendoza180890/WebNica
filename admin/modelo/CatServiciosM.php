<?php
include_once 'ConexionBD.php';
class CatServicioGralM extends ConexionBD{
    // ver servicios en el gestor de contenido.
    public static function verServiciosM(){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("SELECT id, catservicono, catservtitulo, catservdescripcion FROM catservicios");
            $pdo -> execute();
            return $pdo ->fetchAll();
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }

    public static function CrearServicioGralM($datosC){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("INSERT INTO catservicios (catservicono, catservtitulo, catservdescripcion) VALUES (:catservicono, :catservtitulo, :catservdescripcion)");
            $pdo    ->  bindParam(":catservicono",      $datosC["iconServ"],           PDO::PARAM_STR);
            $pdo    ->  bindParam(":catservtitulo",     $datosC["titleServ"],          PDO::PARAM_STR);
            $pdo    ->  bindParam(":catservdescripcion", $datosC["descServ"],   PDO::PARAM_STR);
            
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
    public static function CargarServicioM($item, $valor){
        try {
            if ($item !== '') {     
                $cn = new ConexionBD;
                $pdo = $cn->cBD()->prepare("SELECT id, catservicono, catservtitulo, catservdescripcion FROM catservicios WHERE id = :$item");
                $pdo -> bindParam(":".$item,$valor,PDO::PARAM_INT);
                $pdo->execute();
                return $pdo->fetch();
            }else {
                $cn = new ConexionBD;
                $pdo = $cn->cBD()->prepare("SELECT id, catservicono, catservtitulo, catservdescripcion FROM catservicios");
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
            $pdo = $cn->cBD()->prepare("UPDATE catservicios SET catservicono = :catservicono, catservtitulo = :catservtitulo, catservdescripcion = :catservdescripcion  
            WHERE id = :id");
            $pdo->bindParam(":id",$datosC["id"], PDO::PARAM_INT);
            $pdo->bindParam(":catservicono",$datosC["iconoNew"], PDO::PARAM_STR);
            $pdo->bindParam(":catservtitulo",$datosC["tituloNew"], PDO::PARAM_STR);
            $pdo->bindParam(":catservdescripcion",$datosC["descripcionNew"], PDO::PARAM_STR);
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