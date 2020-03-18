<?php
require_once 'ConexionBD.php';
class SlideM extends ConexionBD{
    public static function CrearSlideM($datosC){
        try {
            $cn = new ConexionBD();
            $pdo = $cn->cBD()->prepare("INSERT INTO catslide (titular, descripcion, orden, imagen, urlPag) VALUES (:titular, :descripcion, :orden, :imagen, :urlPag)");
    
            $pdo ->bindParam(":titular", $datosC["titular"],PDO::PARAM_STR);
            $pdo->bindParam(":descripcion", $datosC["descripcion"], PDO::PARAM_STR);
            $pdo->bindParam(":orden", $datosC["orden"], PDO::PARAM_STR);
            $pdo->bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);
            $pdo->bindParam(":urlPag", $datosC["urlPag"], PDO::PARAM_STR);
    
            if ($pdo->execute()){
                return true;
            }else {
                return false;
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    // ver slide 
    public static function VerSlideM($item, $valor){
        try {
            if ($item != null) {
                $cn = new ConexionBD();
                $pdo = $cn->cBD()->prepare("SELECT * FROM catslide WHERE $item = :$item");
                $pdo -> bindParam(":".$item,$valor,PDO::PARAM_INT);
                $pdo->execute();
                return $pdo->fetch();
            }else {
                $cn = new ConexionBD();
                $pdo = $cn->cBD()->prepare("SELECT * FROM catslide ORDER BY orden ASC");
                $pdo -> execute();
                return $pdo -> fetchAll();
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }

    }

    // actualizar slide
    public static function ActualizarSlideM($datosC){
        $cn = new ConexionBD();
        $pdo = $cn->cBD()->prepare("UPDATE catslide SET titular=:titular, descripcion=:descripcion, orden=:orden, imagen=:imagen, urlPag=:urlPag WHERE id = :id");
        $pdo->bindParam(":id", $datosC["id"], PDO::PARAM_INT);
        $pdo->bindParam(":titular", $datosC["titular"], PDO::PARAM_STR);
        $pdo->bindParam(":descripcion", $datosC["descripcion"], PDO::PARAM_STR);
        $pdo->bindParam(":orden", $datosC["orden"], PDO::PARAM_STR);
        $pdo->bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);
        $pdo->bindParam(":urlPag", $datosC["urlPag"], PDO::PARAM_STR);
        
        if ($pdo->execute()) {
            return true;
        }else {
            return false;
        }
    }

    // Borrar Slide
    public static function BorrarSlideM($id){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("DELETE FROM catslide WHERE id = :id");
            $pdo -> bindParam(":id", $id, PDO::PARAM_INT);
            if ($pdo->execute()) {
                return true;
            }else{
                return false;
            }   
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>