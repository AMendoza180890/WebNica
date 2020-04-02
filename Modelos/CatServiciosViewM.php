<?php
include_once 'conexionBD.php';
class CatServiciosViewModel extends ConBD{
    public static function CatServViewModel(){
        try {
            $cn = new ConBD;
            $pdo = $cn->cBD()->prepare("SELECT id, CatServIcono, CatServTitulo, CatServDescripcion FROM catservicios");
            $pdo -> execute();

            while ($array = $pdo->fetchObject(__CLASS__)) {
                $CatServ[] = $array;
            }
            return $CatServ;

            return $pdo->fetchAll();
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    } 
}
?>