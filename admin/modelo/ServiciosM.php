<?php
include 'ConexionBD.php';
class servicioM extends ConexionBD{
    public static function MostrarEncServiciosM(){
        try {
            $cn = new ConexionBD;
            $PDO = $cn->cBD()->prepare("SELECT id, OHSImgBanner, HOSDescripcion FROM headourservices");
            $PDO -> execute();

            return $PDO->fetch();

        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>