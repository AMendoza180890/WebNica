<?php
require_once 'conexionBD.php';
class SlideM extends ConBD{
    public static function MostrarSlideM(){
        try {
        $cn = new ConBD;
        $pdo = $cn->cBD()->prepare("SELECT titular, descripcion, imagen, orden, urlPag FROM catslide ORDER BY orden ASC");
        $pdo->execute();
        return $pdo->fetchAll();
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
        
    }
}
?>