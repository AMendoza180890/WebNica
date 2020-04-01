<?php
    include_once 'conexionBD.php';
class serviciosM extends ConBD{
    public static function servicioHeaderM(){
        try {
            $cn = new ConBD;
            $pdo = $cn->cBD()->prepare("SELECT HOSImgBanner, HOSDescripcion FROM headourservices");
            $pdo -> execute();
            return $pdo -> fetch();
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>