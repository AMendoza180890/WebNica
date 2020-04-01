<?php
include_once 'ConexionBD.php';
class servicioM extends ConexionBD{
    public static function MostrarEncServiciosM(){
        try {
            $cn = new ConexionBD;
            $PDO = $cn->cBD()->prepare("SELECT id, HOSImgBanner, HOSDescripcion FROM headourservices");
            $PDO -> execute();

            return $PDO->fetch();

        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
    //Mostrar informacion en el formulario
    public static function MostrarEncServiciosFormM()
    {
        try {
            $cn = new ConexionBD;
            $PDO = $cn->cBD()->prepare("SELECT id, HOSImgBanner, HOSDescripcion FROM headourservices WHERE id = 1");
            $PDO->execute();

            return $PDO->fetch();
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
    // Actualiza la informacion
    public static function EditarEncServicioM($datosC){
        try {
            $cn = new ConexionBD;
            $PDO    = $cn->cBD()->prepare("UPDATE headourservices SET  HOSImgBanner = :HOSImgBanner, HOSDescripcion = :HOSDescripcion WHERE id = :id");
            $PDO    ->  bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $PDO    ->  bindParam(":HOSDescripcion", $datosC["description"], PDO::PARAM_STR);
            $PDO    ->  bindParam(":HOSImgBanner", $datosC["imagen"], PDO::PARAM_STR);

            if ($PDO->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (exception $ex) {
            mensajes::error($ex);
        }

    }
}
?>