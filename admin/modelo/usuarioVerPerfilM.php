<?php
    require_once 'ConexionBD.php';
    class usuarioVerPerfilM extends ConexionBD{
    public static function UserVerPerfilM($CatUsuId){
        try {
            $cn = new ConexionBD();
            $pdo = $cn->cBD()->prepare("SELECT CatUsuId, CatUsuario, CatPass, CatUsuFoto FROM catusuario WHERE CatUsuId = :CatUsuId");
            $pdo->bindParam(":CatUsuId", $CatUsuId, PDO::PARAM_INT);
            $pdo->execute();
            return $pdo->fetch();
            
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>