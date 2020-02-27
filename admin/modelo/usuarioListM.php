<?php
require_once 'ConexionBD.php';
class UsuariosListM extends ConexionBD
{

    public static function listaUsuario()
    {
        try {
            $con = new ConexionBD();
            $pdo = $con->cBD()->prepare("SELECT a.CatUsuId, a.CatUsuario, a.CatPass, a.CatUsuFoto, b.catrolnombre FROM catusuario as a inner join catroles as b where a.CatRol = b.catrolid");
            $pdo->execute();
            return $pdo->fetchAll();
        } catch (Exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>