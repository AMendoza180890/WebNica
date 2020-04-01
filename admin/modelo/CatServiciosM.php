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
            $pdo    ->  bindParam(":catservicono",      $datosC["icono"],           PDO::PARAM_STR);
            $pdo    ->  bindParam(":catservtitulo",     $datosC["titulo"],          PDO::PARAM_STR);
            $pdo    ->  bindParam(":catservdescripcion", $datosC["descripcionN"],   PDO::PARAM_STR);
            
            if ($pdo    ->  execute()) {
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