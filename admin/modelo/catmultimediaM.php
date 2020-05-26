<?php
    include_once 'ConexionBD.php';
class clsMultimediaM extends ConexionBD{
    public static function mostrarListaMediaM(){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("SELECT id, catMediaDescripcion, catMediaImg, catMediaImgPublic FROM catmedia");
            $pdo -> execute();
            return $pdo->fetchAll();
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>