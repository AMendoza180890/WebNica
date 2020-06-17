<?php
require_once 'ConexionBD.php';
class rolesMenuM extends ConexionBD{
    public static function catrolesMenuM($RolMenuId){
        try {
            $cn = new ConexionBD;
    
            $pdo = $cn->cBD()->prepare("SELECT CatMenu.CatMenuId,catmenu.CatMenuRef,catmenu.CatMenuIcon,catmenu.CatMenuTag FROM unionrolmenu INNER JOIN catmenu ON unionrolmenu.CatMenuId = catmenu.CatMenuId INNER JOIN catroles ON unionrolmenu.CatRolId = catroles.CatRolId WHERE catroles.CatRolId = :id");
            $pdo -> bindParam(":id",$RolMenuId,PDO::PARAM_INT);
            $pdo -> execute();
    
            return $pdo->fetchAll();
        } catch (exception $ex) {
            mensajes::error($ex);
        }
        
    }
}

?>