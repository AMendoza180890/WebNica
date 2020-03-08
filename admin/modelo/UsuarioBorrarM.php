<?php
    include_once "ConexionBD.php";
class BorrarUserM extends ConexionBD{
    public static function BorrarUsuarioM($datosc){
        try {
            $cn = new ConexionBD;
            $pdo = $cn->cBD()->prepare("UPDATE catusuario SET catUsuEstado = 2, catUsuFoto IS NULL WHERE CatUsuId = :CatUsuId");
            $pdo -> bindParam(":CatUsuId", $datosc, PDO::PARAM_INT);
            if ($pdo->execute()) {
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