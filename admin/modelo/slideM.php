<?php
require_once 'ConexionBD.php';
class SlideM extends ConexionBD{
    public static function CrearSlideM($datosC){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("INSERT INTO catslide (titular, descripcion, orden, imagen) VALUES (:titular, :descripcion, :orden, :imagen)");
    
            $pdo ->bindParam(":titular", $datosC["titular"],PDO::PARAM_STR);
            $pdo->bindParam(":descripcion", $datosC["descripcion"], PDO::PARAM_STR);
            $pdo->bindParam(":orden", $datosC["orden"], PDO::PARAM_STR);
            $pdo->bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);
    
            if ($pdo->execute()){
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